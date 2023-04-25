<?php

namespace App\Http\Controllers;
use App\Models\Amenities;
use App\Models\Bed;
use App\Models\Complements;
use Illuminate\Http\Request;
use App\Models\RoomType;
use App\Models\RoomTypeImage;
use Illuminate\Support\Facades\Validator;


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
        $amenities= Amenities::all();
        $beds= Bed::all();
        $complements= Complements::all();
        return view('myLayouts.roomType.create',['amenities'=>$amenities,'beds'=>$beds,'complements'=>$complements]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        $request->validate([
            'title'=>'required',
            'detail'=>'required',
            'adults'=>'required|min:1',
            'children'=>'required|min:0',
            'price'=>'required',
            'image_path'=>'required|mimes:jpg,png,jpeg',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif',
        ],[
            'title.required' => 'Please enter a valid name for the Room Type !',
            'detail.required' => 'Please enter the details !',
            'adults.required' => 'Please enter a number for adults !',
            'children.required' => 'Please enter a number for children !',
            'price.required' => 'Enter a valid price !',
            'image_path.required' => 'Please select an image !',
        ]);
        //cover image
        $room_image = $request->file('image_path');
        $name_generate = hexdec(uniqid());
        $img_extension = strtolower($room_image->getClientOriginalExtension());
        $img_name = $name_generate.'.'.$img_extension;
        $location = 'images/';
        $last_img = $location.$img_name;
        $room_image->move($location,$img_name);


        $roomType = RoomType::create([
            'title'=>$request->title,
            'detail'=>$request->detail,
            'adults'=>$request->adults,
            'children'=>$request->children,
            'price'=>$request->price,
            'image_path'=> $last_img,
        ]);
        // dd($request->amenities);
        $roomType->amenities()->syncWithoutDetaching($request->amenities);
        $roomType->beds()->syncWithoutDetaching($request->beds);
        $roomType->complements()->syncWithoutDetaching($request->complements);
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $validator = Validator::make(['image' => $image], ['image' => 'required|image|mimes:jpeg,png,jpg,gif']);

                if ($validator->fails()) {
                    return redirect()->back()->withErrors($validator);
                }

                $imageName = time() . '_' . $image->getClientOriginalName();
                $image->move(public_path('images'), $imageName);

                $imgData = new RoomTypeImage;
                $imgData->roomType_id = $roomType->id;
                $imgData->image = 'images/' . $imageName;
                $imgData->save();
            }
        }

        return redirect('/myLayouts/roomType')->with('success','Room Type has been created successfully.');

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
        $data = RoomType::find($id);
        if($request->hasFile('image_path')){
            $room_image = $request->file('image_path');
            $name_generate = hexdec(uniqid());
            $img_extension = strtolower($room_image->getClientOriginalExtension());
            $img_name = $name_generate.'.'.$img_extension;
            $location = 'images/';
            $last_img = $location.$img_name;
            $room_image->move($location,$img_name);
            $data->update([
                'image_path'=> $last_img,
            ]);

        }

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $imageName = $image->getClientOriginalName();
                $image->move(public_path('images'), $imageName);
                $imgData = new RoomTypeImage;
                $imgData->roomType_id = $data->id;
                $imgData->image = 'images/' . $imageName;
                $imgData->save();
            }
        }
        $request->validate([
            'title'=>'required',
            'detail'=>'required',
            'adults'=>'required|min:1',
            'children'=>'required|min:0',
            'price'=>'required',
        ],[
            'title.required' => 'Please enter a valid Room Title !',
            'detail.required' => 'Please enter the Details for the Room !',
             'adults.required' => 'Please enter a number for adults !',
            'children.required' => 'Please enter a number for children !',
            'price.required' => 'Enter a Room price !',
        ]);
        $data->update([
            'title'=>$request->title,
            'detail'=>$request->detail,
            'adults'=>$request->adults,
            'children'=>$request->children,
            'price'=>$request->price,
        ]);
        return redirect('myLayouts/roomType/'.$id.'/edit')->with('success', 'The room Type has been updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = RoomType::destroy($id);
        return redirect('myLayouts/roomType')->with('success', "The room type has been deleted successfully.");
    }
    public function destroy_image(string $img_id)
    {
        $data = RoomTypeImage::where('id', $img_id)->first();
        RoomTypeImage::where('id', $img_id)->delete();
        return response()->json([
            'status'=> true,
        ]);
    }
}
