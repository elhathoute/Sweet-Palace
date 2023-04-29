<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Room;
use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $booking = Booking::with(['user', 'room'])->get();
        return view('myLayouts.booking.index', ['booking' => $booking]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = User::all();
        $rooms = Room::all();
        return view('myLayouts.booking.create', ['users' => $users, 'rooms' => $rooms]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $room = Room::find($request->room_id);
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'room_id' => 'required|exists:rooms,id',
            'checkin_date' => 'required|after_or_equal:today',
            'checkout_date' => 'required|after:checkin_date',

        ], [
            'user_id.required' => 'Please Select a User !',
            'room_id.required' => 'Please Select a Room !',
            'checkin_date.required' => 'Please Select a date for check in !',
            'checkout_date.required' => 'Please Select a date for check out !',
        ]);
        Booking::create([
            'user_id' => $request->user_id,
            'room_id' => $request->room_id,
            'checkin_date' => $request->checkin_date,
            'checkout_date' => $request->checkout_date,

        ]);
        $room->update([
            'available' => 0,
        ]);
        // dd($room->update([
        //     'available' => 0,
        // ]));



        $room->save();



        // return response()->json(['success' => 'Les données ont été enregistrées avec succès !']);
        return redirect('/myLayouts/booking')->with('success', 'Booking has been created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $booking = Booking::find($id);
        return view('myLayouts.booking.show')->with('booking', $booking);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = User::all();
        $room = Room::all();
        $booking = Booking::with(['user', 'room'])->find($id);
        return view('myLayouts.booking.edit', ['user' => $user, 'room' => $room, 'booking' => $booking]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $booking = Booking::find($id);
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'room_id' => 'required|exists:rooms,id',
            'checkin_date' => 'required|after_or_equal:today',
            'checkout_date' => 'required|after:checkin_date',


        ], [
            'user_id.required' => 'Please Select a User !',
            'room_id.required' => 'Please Select a Room !',
            'checkin_date.required' => 'Please Select a date for check in !',
            'checkout_date.required' => 'Please Select a date for check out !',

        ]);
        $booking->update([
            'user_id' => $request->user_id,
            'room_id' => $request->room_id,
            'checkin_date' => $request->checkin_date,
            'checkout_date' => $request->checkout_date,

        ]);
        return redirect('myLayouts/booking/' . $id . '/edit')->with('success', 'The booking has been updated successfully.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $booking = Booking::destroy($id);
        return redirect('myLayouts/booking')->with('success', "The booking has been deleted successfully.");
    }

    public function available_rooms(Request $request, $checkin_date)
    {
        $available = DB::select("SELECT * FROM rooms WHERE id NOT IN (SELECT room_id FROM bookings WHERE
                                '$checkin_date' BETWEEN checkin_date AND checkout_date)");
        return response()->json(['data' => $available]);
    }
}
