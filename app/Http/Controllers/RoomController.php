<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;
use App\Models\RoomType;


class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rooms  = Room::with('RoomType')->get();
        return view('myLayouts.rooms.index', ['rooms' => $rooms]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $roomTypes = RoomType::all();
        return view('myLayouts.rooms.create', ['roomTypes'=>$roomTypes]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required',
            'roomType_id'=>'required',

        ],[
            'title.required' => 'Please enter a valid name for the Room !',
            'roomType_id.required' => 'Please Select a type for the Room !',
        ]);
        Room::create([
            'title' => $request->title,
            'roomType_id' => $request->roomType_id,
        ]);
        return redirect('/myLayouts/rooms')->with('success','Room has been created successfully.');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $room = Room::find($id);
        return view('myLayouts.rooms.show')->with('room', $room);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $room = Room::with('RoomType')->find($id);
        $roomTypes = RoomType::all();

        return view('myLayouts.rooms.edit', ['room'=>$room, 'roomTypes'=>$roomTypes]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $room = Room::find($id);
        $request->validate([
            'title'=>'required',
            'roomType_id'=>'required',

        ],[
            'title.required' => 'Please enter a valid name for the Room !',
            'roomType_id.required' => 'Please Select a type for the Room !',
        ]);
        $room->update([
            'title' => $request->title,
            'roomType_id' => $request->roomType_id,
        ]);
        return redirect('myLayouts/rooms/'.$id.'/edit')->with('success', 'The Room has been updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $room = Room::find($id);
        $room->delete();
        return redirect('myLayouts/rooms')->with('success1', "The Room has been deleted successfully.");
    }
}
