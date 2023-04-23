<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfilController extends Controller
{

    public function index()
    {
        return view('myLayouts.editProfile');
    }


    public function update(User $user, Request $request)
    {
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'mobile'=>$request->mobile,
            'address'=>$request->address,
            'updated_at' => now(),
        ]);
        return view('myLayouts.editProfile')->with('success', 'Profile Updated Successfully');
    }


    public function changePassword()
    {
        return view('myLayouts.change-password');
    }
    public function updatePassword(Request $request)
    {
        # Validation
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|confirmed',
        ]);


        #Match The Old Password
        if(!Hash::check($request->old_password, auth()->user()->password)){
            return back()->with("error", "Old Password Doesn't match!");
        }


        #Update the new Password
        User::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->new_password)
        ]);

        return back()->with("status", "Password changed successfully!");
    }

    public function deleteAccount()
    {
        // Check if the user is authenticated
        if (Auth::check()) {
            $user = Auth::user();

            // Log the user out before deleting their account
            Auth::logout();

            // Delete the user's account
            $user->delete();

            // Redirect the user to the login page with a success message
            return redirect()->route('login')->with('success', 'Your account has been deleted.');
        }

        // If there is no authenticated user, redirect to the login page with an error message
        return redirect()->route('login')->with('error', 'You must be logged in to delete your account.');

    }
    
}
