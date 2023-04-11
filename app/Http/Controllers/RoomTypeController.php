<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RoomType;

class RoomTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = RoomType::all();
        return view('myLayouts.roomType.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('myLayouts.roomType.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, RoomType $roomType)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'detail' => 'required|string',
        ]);
        $roomType->create($data);

        return redirect()->route('myLayouts.roomType.create')->with('Sucssess ! Room Type has been Added Successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = RoomType::find($id);
        return view('myLayouts.roomType.show')->with('data', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = RoomType::find($id);
        return view('myLayouts.roomType.edit')->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $roomType = RoomType::findOrFail($id);

        $request->validate([
            'title' => 'required',
            'detail' => 'required',
        ], [
            'title.required' => 'Please enter a valid title for the room !',
            'detail.required' => 'Please enter the room details!',
        ]);

        $roomType->update([
            'title' => $request->title,
            'detail' => $request->detail,
        ]);

        return redirect()->route('myLayouts.roomType.edit', $id)->with('success', 'The room Type has been updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $roomType = RoomType::findOrFail($id);
        $roomType->delete();
        return redirect('myLayouts/roomType')->with('Success', "The room type '$roomType->title' has been deleted successfully.");
    }
}
