<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Contact;
use App\Models\Room;
use App\Models\RoomType;
use App\Models\Service;
use App\Models\Gallery;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class PageController extends Controller
{
    public function acceuil(){
        $all_rooms  = Room::with('RoomType')->get();
        $gallery  = Gallery::all();
        return view('myLayouts.acceuil', ['all_rooms' => $all_rooms, 'gallery' => $gallery]);
    }
    public function about_us(){
        return view('myLayouts/aboutPage');
    }
    public function diplayRooms()
    {
        $rooms  = Room::with('RoomType')->get();
        foreach ($rooms as $key => $item) {
            
            $room = Room::find($item->id);
            $availability = DB::table('bookings')->where('room_id', $room->id)->count();
        
            if($availability > 0){
                $room->update([
                    'available' => 0,
                ]);
            }else{
                $room->update([
                    'available' => 1,
                ]);
            }
        }

        return view('myLayouts.roomPage', ['rooms' => $rooms]);
    }
    public function services()
    {
        $service  = Service::all();
        return view('myLayouts.servicePage', ['service' => $service]);
    }
    public function gallery()
    {
        $gallery  = Gallery::all();
        return view('myLayouts.galleryPage', ['gallery' => $gallery]);
    }
    public function contact_us(){
        return view('myLayouts/contactPage');
    }
    public function save_contact_us(Request $request){
        $request->validate([
            'full_name'=>'required|string',
            'email'=>'required',
            'subject'=>'required',
            'message'=>'required',
        ],[
            'full_name.required'=>'Enter a validate name !',
            'email.required'=>'Enter a validate email !',
            'subject.required'=>'Enter a subject !',
            'message.required'=>'write a message !',
        ]);

        Contact::create([
                'full_name' => $request->full_name,
                'email' => $request->email,
                'subject' => $request->subject,
                'message' => $request->message,
        ]);
        return redirect()->route('contact')->with('success','Message has been sent successfully.');

    }
    public function booking(string $id){

        $room = Room::with('RoomType')->find($id);
        return view('myLayouts.bookingPage', ['room' => $room]);
    }
    public function reservation(string $id){
        $room = Room::with('RoomType')->find($id);
        return view('myLayouts.reservation', ['room' => $room]);
    }
    public function checkAvailability(Request $request){
        $rooms  = Room::with('RoomType')->get();
        $request->validate([
            'checkin_date' => 'required|after_or_equal:today',
            'checkout_date' => 'required|after:checkin_date',
            'adults' => 'required|min:1',
            'children' => 'required|min:0',

        ], [
            'checkin_date.required' => 'Please Select a date for check in !',
            'checkout_date.required' => 'Please Select a date for check out !',
            'adults.required' => 'Enter a number for adults !',
            'children.required' => 'Enter a number for Children !',
        ]);
        $checkin_date = $request->input('checkin_date');
        $checkout_date = $request->input('checkout_date');
        $total_adults = $request->input('adults');
        $total_children = $request->input('children');

        $available_rooms = Room::with('RoomType','bookings')
            ->where(function($query) use ($total_adults,$total_children ){
                $query->whereHas('RoomType', function ($subquery) use ($total_adults, $total_children) {
                    $subquery->where('adults', '>=', $total_adults)
                            ->where('children', '>=', $total_children);
                });
                })
            ->where(function($query) use ($checkin_date, $checkout_date ){
                $query->whereDoesntHave('bookings', function($subquery) use ($checkin_date, $checkout_date) {
                    $subquery->whereBetween('checkin_date', [$checkin_date, $checkout_date])
                            ->orWhereBetween('checkout_date', [$checkin_date, $checkout_date]);
                });
            })
            ->where('rooms.available', '=', 1)
            ->get();



        return view('myLayouts.availableRooms', ['available_rooms' => $available_rooms, 'rooms'=>$rooms]);
    }
    public function reservation_display(string $room_id){
        $room = Room::with('RoomType')->find($room_id);
        return view('myLayouts.makeReservation', ['room' => $room]);
    }
    public function make_reservation(Request $request, $room_id){
        $room = Room::find($room_id);
      
        $user= User::find(auth()->user()->id);

        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'mobile' => 'required',
            'address' => 'required',
            'checkin_date' => 'required|after_or_equal:today',
            'checkout_date' => 'required|after:checkin_date',

        ], [
            'name' => 'Enter a valid Name !',
            'email' => 'Enter a valid Email Address !',
            'mobile' => 'Enter a valid phone number !',
            'address' => 'Enter a valid address !',
            'checkin_date.required' => 'Please Select a date for check in !',
            'checkout_date.required' => 'Please Select a date for check out !',
        ]);
        $checkin = $request->checkin_date;
        $checkout = $request->checkout_date;
        
        $available = DB::select("SELECT * FROM `bookings`
                                  WHERE `room_id` = $room_id AND
                                        (`checkin_date` BETWEEN '$checkin' AND '$checkout' OR
                                         `checkout_date` BETWEEN '$checkin' AND '$checkout')");
        
        if (empty($available)) {
            $room->update([
                'available' => 0,
            ]);
            $user->update([
                'name' => $request->name,
                'email' => $request->email,
                'mobile' => $request->mobile,
                'address' => $request->address,
            ]);
            Booking::create([
                'user_id' => auth()->user()->id,
                'room_id' => $room_id,
                'checkin_date' => $checkin,
                'checkout_date' => $checkout,
            ]);
        
            return redirect()->back()->with('message', 'Your Booking has been Added Successfully !');
        } else {
            return redirect()->back()->with('message', 'Sorry ! The Room is not available in this Date ! You can select another Time for Booking');
        }
        
        

    }
}
