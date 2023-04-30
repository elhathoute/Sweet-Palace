<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        return view('myLayouts.users.index', ['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('myLayouts.users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required|string',
            'email'=>'required|email',
            'password'=>'required|string|confirmed|min:8',
            'mobile'=>'required',
            'address'=>'required',
        ],[
            'name.required' => 'Please enter a valid name !',
            'email.required' => 'Please Enter a valid Email Address !',
            'password.required' => 'Please Enter a valid password!',
            'mobile.required' => 'Please Enter a valid Mobile number !',
            'address.required' => 'Please Enter a valid Address !',
        ]);

        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password),
            'mobile'=>$request->mobile,
            'address'=>$request->address,
        ]);
        return redirect('/myLayouts/users')->with('success','User has been created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user = User::find($id);
        return view('myLayouts.users.show')->with('user', $user);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = User::find($id);
        return view('myLayouts.users.edit')->with('user', $user);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = User::find($id);

        $request->validate([
            'name'=>'required|string',
            'email'=>'required|email',
            'password'=>'required|string|confirmed|min:8',
            'mobile'=>'required',
            'address'=>'required',
        ],[
            'name.required' => 'Please Enter a valid name !',
            'email.required' => 'Please Enter a valid Email Address !',
            'password.required' => 'Please Enter a valid password!',
            'mobile.required' => 'Please Enter a valid Mobile number !',
            'address.required' => 'Please Enter a valid Address !',
        ]);
        $user->update([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password),
            'mobile'=>$request->mobile,
            'address'=>$request->address,
        ]);
        return redirect('myLayouts/users/'.$id.'/edit')->with('success', 'User Informations has been updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::destroy($id);
        return redirect('myLayouts/users')->with('success', "User has been deleted successfully.");
    }



    // public function changeRole(Request $request,string $id){
    //     // Récupérer l'utilisateur à partir de l'ID
    //     $user = User::find($id);
    //     // Valider la requête
    //     $request->validate([
    //         'role' => 'required|in:0,1',
    //     ]);

    //     // Mettre à jour le rôle de l'utilisateur
    //     $user->role = $request->input('role');
    //     $user->save();

    //     // Rediriger vers la page d'affichage des utilisateurs avec un message de succès
    //     return redirect('/myLayouts/users')->with('success', 'Le rôle de l\'utilisateur a été mis à jour avec succès.');
    // }

}

