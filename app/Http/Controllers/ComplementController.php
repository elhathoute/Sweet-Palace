<?php

namespace App\Http\Controllers;

use App\Models\Complements;
use Illuminate\Http\Request;

class ComplementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $complements = Complements::all();
        return view('myLayouts.complements.index', ['complements' => $complements]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('myLayouts.complements.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',

        ],[
            'name.required' => 'Please enter a valid name for the Complement !',
        ]);
        Complements::create([
            'name' => $request->name,
        ]);
        return redirect('/myLayouts/complements')->with('success','Complement has been created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $complement = Complements::find($id);
        return view('myLayouts.complements.show')->with('complement', $complement);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $complement = Complements::find($id);
        return view('myLayouts.complements.edit', ['complement'=>$complement]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $complement = Complements::find($id);
        $request->validate([
            'name'=>'required',

        ],[
            'name.required' => 'Please enter a valid name for the Complement !',
        ]);
        $complement->update([
            'name' => $request->name,
        ]);
        return redirect('myLayouts/complements/'.$id.'/edit')->with('success', 'The Complement has been updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $complement = Complements::find($id);
        $complement->delete();
        return redirect('myLayouts/complements')->with('success', "The Complement has been deleted successfully.");
    }
}
