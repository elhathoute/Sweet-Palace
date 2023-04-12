<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $admins = Admin::all();
        return view('myLayouts.admins.index', ['admins' => $admins]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('myLayouts.admins.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'picture'=>'required|mimes:jpg,png,jpeg',
            'firstname'=>'required|string',
            'lastname'=>'required|string',
            'email'=>'required|email',
            'password'=>'required|string|confirmed|min:8',
            'mobile'=>'required',
            'address'=>'required',
        ],[
            'picture.required' => 'Please enter a picture !',
            'firstname.required' => 'Please enter a valid Firstname !',
            'lastname.required' => 'Please Enter a valid Lastname !',
            'email.required' => 'Please Enter a valid Email Address !',
            'password.required' => 'Please Enter a valid password!',
            'mobile.required' => 'Please Enter a valid Mobile number !',
            'address.required' => 'Please Enter a valid Address !',
        ]);
        $admin_image = $request->file('picture');
        $name_generate = hexdec(uniqid());
        $img_extension = strtolower($admin_image->getClientOriginalExtension());
        $img_name = $name_generate.'.'.$img_extension;
        $location = 'images/';
        $last_img = $location.$img_name;
        $admin_image->move($location,$img_name);

        Admin::create([
            'picture'=> $last_img,
            'firstname'=>$request->firstname,
            'lastname'=>$request->lastname,
            'email'=>$request->email,
            'password'=>Hash::make($request->password),
            'mobile'=>$request->mobile,
            'address'=>$request->address,
        ]);
        return redirect('/myLayouts/admins')->with('success','Admin has been created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $admin = Admin::find($id);
        return view('myLayouts.admins.show')->with('admin', $admin);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $admin = Admin::find($id);
        return view('myLayouts.admins.edit')->with('admin', $admin);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $admin = Admin::find($id);
        if($request->hasFile('picture')){
            $admin_image = $request->file('picture');
            $name_generate = hexdec(uniqid());
            $img_extension = strtolower($admin_image->getClientOriginalExtension());
            $img_name = $name_generate.'.'.$img_extension;
            $location = 'images/';
            $last_img = $location.$img_name;
            $admin_image->move($location,$img_name);
            $admin->update([
                'picture'=> $last_img,
            ]);
        }
        $request->validate([
            'firstname'=>'required|string',
            'lastname'=>'required|string',
            'email'=>'required|email',
            'password'=>'required|string|confirmed|min:8',
            'mobile'=>'required',
            'address'=>'required',
        ],[
            'firstname.required' => 'Please enter a valid Firstname !',
            'lastname.required' => 'Please Enter a valid LAstname !',
            'email.required' => 'Please Enter a valid Email Address !',
            'password.required' => 'Please Enter a valid password!',
            'mobile.required' => 'Please Enter a valid Mobile number !',
            'address.required' => 'Please Enter a valid Address !',
        ]);
        $admin->update([
            'firstname'=>$request->firstname,
            'lastname'=>$request->lastname,
            'email'=>$request->email,
            'password'=>Hash::make($request->password),
            'mobile'=>$request->mobile,
            'address'=>$request->address,
        ]);
        return redirect('myLayouts/admins/'.$id.'/edit')->with('success', 'Admin Informations has been updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Admin::destroy($id);
        return redirect('myLayouts/admins')->with('success1', "Admin has been deleted successfully.");
    }
}
