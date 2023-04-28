<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Room;
use App\Models\RoomType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mailer;
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
    // public function reservation(Room $room){
    //     $room->load('RoomType');
    //     dd($room);
    //     return view('myLayouts.reservation', ['room' => $room]);
    // }
    public function checkAvailability(Request $request){
        $rooms  = Room::with('RoomType')->get();
        $checkin_date = $request->input('checkin_date');
        $checkout_date = $request->input('checkout_date');
        $total_adults = $request->input('adults');
        $total_children = $request->input('children');

                        
        $available_rooms = Room::join('room_types as rt', 'rooms.roomType_id', '=', 'rt.id')
                            ->with('RoomType')
                            ->whereNotIn('rooms.id', function($query) use ($checkin_date, $checkout_date) {
                                $query->select('room_id')
                                      ->from('bookings')
                                      ->whereBetween('checkin_date', [$checkin_date, $checkout_date])
                                      ->orWhereBetween('checkout_date', [$checkin_date, $checkout_date])
                                      ->orWhere(function($query) use ($checkin_date, $checkout_date) {
                                            $query->where('checkin_date', '<', $checkin_date)
                                                  ->where('checkout_date', '>', $checkout_date);
                                        });
                            })
                            ->where('rt.adults', '>=', $total_adults)
                            ->where('rt.children', '>=', $total_children)
                            ->where('rooms.available', '=', 1)
                            ->get();

                     
        // dd($available_rooms);      
        return view('myLayouts.availableRooms', ['available_rooms' => $available_rooms, 'rooms'=>$rooms]);
    }
    
    
}
