<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Room;
use Illuminate\Http\Request;
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
}
