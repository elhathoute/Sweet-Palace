<?php

namespace App\Http\Controllers;

use App\Models\Bed;
use Illuminate\Http\Request;

class BedController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $beds = Bed::all();
        return view('myLayouts.beds.index', ['beds' => $beds]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('myLayouts.beds.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',

        ],[
            'name.required' => 'Please enter a valid name for the Bed !',
        ]);
        Bed::create([
            'name' => $request->name,
        ]);
        return redirect('/myLayouts/beds')->with('success','Bed has been created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $bed = Bed::find($id);
        return view('myLayouts.beds.show')->with('bed', $bed);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $bed = Bed::find($id);
        return view('myLayouts.beds.edit', ['bed'=>$bed]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $bed = Bed::find($id);
        $request->validate([
            'name'=>'required',

        ],[
            'name.required' => 'Please enter a valid name for the bed !',
        ]);
        $bed->update([
            'name' => $request->name,
        ]);
        return redirect('myLayouts/beds/'.$id.'/edit')->with('success', 'The bed has been updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $bed = Bed::find($id);
        $bed->delete();
        return redirect('myLayouts/amenities')->with('success', "The Amenity has been deleted successfully.");
    }
}
