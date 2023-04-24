<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pictures = Gallery::all();
        return view('myLayouts.gallery.index', ['pictures' => $pictures]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('myLayouts.gallery.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request){

        $request->validate([
            'pictures'=>'required|mimes:png,svg,jpg,jpeg',
        ],[
            'pictures.required' => 'Please Select a picture !',

        ]);
        $gallery_image = $request->file('pictures');
        $name_generate = hexdec(uniqid());
        $img_extension = strtolower($gallery_image->getClientOriginalExtension());
        $img_name = $name_generate.'.'.$img_extension;
        $location = 'images/';
        $last_img = $location.$img_name;
        $gallery_image->move($location,$img_name);

        Gallery::create([
            'pictures'=> $last_img,
        ]);
        return redirect('/myLayouts/gallery')->with('success','Picture has been created successfully !');
    }

    /**
     * Display the specified resource.
     */
    public function show(Gallery $gallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $picture = Gallery::find($id);
        return view('myLayouts.gallery.edit')->with('picture', $picture);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $picture = Gallery::find($id);
        $request->validate([
            'pictures'=>'required|mimes:png,svg,jpg,jpeg',
        ],[
            'pictures.required' => 'Please Select a picture !',
            'pictures.mimes' => 'Only PNG, SVG, JPG, and JPEG files are allowed',
        ]);
        if($request->hasFile('pictures')){
            $gallery_image = $request->file('pictures');
            $name_generate = hexdec(uniqid());
            $img_extension = strtolower($gallery_image->getClientOriginalExtension());
            $img_name = $name_generate.'.'.$img_extension;
            $location = 'images/';
            $last_img = $location.$img_name;
            $gallery_image->move($location,$img_name);

            $picture->update([
                'pictures'=> $last_img,
            ]);
        }
        return redirect('myLayouts/gallery/'.$id.'/edit')->with('success', 'image has been updated successfully.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $picture = Gallery::destroy($id);
        return redirect('myLayouts/gallery')->with('success', "Image has been deleted successfully.");
    }
}
