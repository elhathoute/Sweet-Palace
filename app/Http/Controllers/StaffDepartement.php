<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Departement;

class StaffDepartement extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $departments = Departement::all();
        return view('myLayouts.departements.index', ['departments' => $departments]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('myLayouts.departements.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required',
            'detail'=>'required',
        ],[
            'title.required' => 'Please enter a valid name for the Departement!',
            'detail.required' => 'Please enter the details !',
        ]);
        Departement::create([
            'title' => $request->title,
            'detail' => $request->detail,
        ]);
        return redirect('/myLayouts/departements')->with('success','Department has been created successfully.');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $departement = Departement::find($id);
        return view('myLayouts.departements.show')->with('departement', $departement);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $departement = Departement::find($id);
        return view('myLayouts.departements.edit')->with('departement', $departement);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $departement = Departement::find($id);
        $request->validate([
            'title'=>'required',
            'detail'=>'required',
        ],[
            'title.required' => 'Please enter a valid Department Title !',
            'detail.required' => 'Please enter the Details for the Department !',
        ]);
        $departement->update([
            'title'=>$request->title,
            'detail'=>$request->detail,
        ]);
        return redirect('myLayouts/departements/'.$id.'/edit')->with('success', 'The Department has been updated successfully.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $departement = Departement::destroy($id);
        return redirect('myLayouts/departements')->with('success', "The Department has been deleted successfully.");
    }
}
