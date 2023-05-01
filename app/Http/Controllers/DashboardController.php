<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        $usersCount = DB::table('users')->where('role', 0)->count();
        $adminsCount = DB::table('users')->where('role', 1)->count();
        $roomTypes = $this->countRows('room_types');
        $staff = $this->countRows('staff');
        return view('myLayouts/statistics', ['usersCount'=>$usersCount, 'adminsCount'=>$adminsCount, 'roomTypes'=>$roomTypes, 'staff'=>$staff]);

    }

    public function countRows($tableName)
    {
        $count = DB::table($tableName)->count();
        return $count;
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
