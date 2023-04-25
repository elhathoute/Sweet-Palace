<?php

namespace App\Http\Controllers;

use App\Models\Amenities;
use Illuminate\Http\Request;

class AmenityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $amenities = Amenities::all();
        return view('myLayouts.amenities.index', ['amenities' => $amenities]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('myLayouts.amenities.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',

        ],[
            'name.required' => 'Please enter a valid name for the Aminity !',
        ]);
        Amenities::create([
            'name' => $request->name,
        ]);
        return redirect('/myLayouts/amenities')->with('success','Amenity has been created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $amenity = Amenities::find($id);
        return view('myLayouts.amenities.show')->with('amenity', $amenity);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $amenity = Amenities::find($id);
        return view('myLayouts.amenities.edit', ['amenity'=>$amenity]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $amenity = Amenities::find($id);
        $request->validate([
            'name'=>'required',

        ],[
            'name.required' => 'Please enter a valid name for the Amenity !',
        ]);
        $amenity->update([
            'name' => $request->name,
        ]);
        return redirect('myLayouts/amenities/'.$id.'/edit')->with('success', 'The Amenity has been updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $amenity = Amenities::find($id);
        $amenity->delete();
        return redirect('myLayouts/amenities')->with('success', "The Amenity has been deleted successfully.");
    }
}
