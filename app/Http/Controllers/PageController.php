<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Room;
use App\Models\RoomType;
use App\Models\Service;
use App\Models\Gallery;
use Illuminate\Http\Request;
class PageController extends Controller
{
    public function about_us(){
        return view('myLayouts/aboutPage');
    }
    public function diplayRooms()
    {
        $rooms  = Room::with('RoomType')->get();
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

}
