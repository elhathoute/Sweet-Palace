<?php

namespace App\Http\Controllers;

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
        return view('myLayouts.booking.create', ['users'=>$users, 'rooms'=>$rooms]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'user_id'=>'required|exists:users,id',
            'room_id'=>'required|exists:rooms,id',
            'checkin_date'=>'required|after_or_equal:today',
            'checkout_date'=>'required|after:checkin_date',
            'total_adults'=>'required|integer|min:1',
            'total_children'=>'required|integer|min:0',

        ],[
            'user_id.required' => 'Please Select a User !',
            'room_id.required' => 'Please Select a Room !',
            'checkin_date.required' => 'Please Select a date for check in !',
            'checkout_date.required' => 'Please Select a date for check out !',
            'total_adults.required' => 'Please enter a number of adults !',
            'total_children.required' => 'Please enter a number of Children !',
        ]);
        Booking::create([
            'user_id' => $request->user_id,
            'room_id' => $request->room_id,
            'checkin_date' => $request->checkin_date,
            'checkout_date' => $request->checkout_date,
            'total_adults' => $request->total_adults,
            'total_children' => $request->total_children,
        ]);
        return redirect('/myLayouts/booking')->with('success','Booking has been created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Booking $booking)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Booking $booking)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Booking $booking)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Booking $booking)
    {
        //
    }
}
