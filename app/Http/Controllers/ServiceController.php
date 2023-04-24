<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = Service::all();
        return view('myLayouts.services.index', ['services' => $services]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('myLayouts.services.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'photo_icon'=>'required|mimes:png,svg',
            'title'=>'required|string',
            'description'=>'required',
        ],[
            'photo_icon.required' => 'Please enter a picture !',
            'title.required' => 'Please enter a valid title of the service !',
            'description.required' => 'Please Enter a valid description !',
        ]);
        $service_image = $request->file('photo_icon');
        $name_generate = hexdec(uniqid());
        $img_extension = strtolower($service_image->getClientOriginalExtension());
        $img_name = $name_generate.'.'.$img_extension;
        $location = 'images/';
        $last_img = $location.$img_name;
        $service_image->move($location,$img_name);

        Service::create([
            'photo_icon'=> $last_img,
            'title'=>$request->title,
            'description'=>$request->description,
        ]);
        return redirect('/myLayouts/services')->with('success','Service has been created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $service = Service::find($id);
        return view('myLayouts.services.show')->with('service', $service);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $service = Service::find($id);
        return view('myLayouts.services.edit')->with('service', $service);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $service = Service::find($id);
        if($request->hasFile('photo_icon')){
            $service_image = $request->file('photo_icon');
            $name_generate = hexdec(uniqid());
            $img_extension = strtolower($service_image->getClientOriginalExtension());
            $img_name = $name_generate.'.'.$img_extension;
            $location = 'images/';
            $last_img = $location.$img_name;
            $service_image->move($location,$img_name);

            $service->update([
                'photo_icon'=> $last_img,
            ]);
        }
        $request->validate([
            'title'=>'required|string',
            'description'=>'required',
        ],[
            'title.required' => 'Please enter a valid title of the service !',
            'description.required' => 'Please Enter a valid description !',
        ]);
        $service->update([
            'title'=>$request->title,
            'description'=>$request->description,
        ]);
        return redirect('myLayouts/services/'.$id.'/edit')->with('success', 'Service Informations has been updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $service = Service::destroy($id);
        return redirect('myLayouts/services')->with('success', "Service has been deleted successfully.");
    }
}
