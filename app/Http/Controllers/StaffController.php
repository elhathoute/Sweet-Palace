<?php

namespace App\Http\Controllers;

use App\Models\Departement;
use App\Models\Staff;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $staff  = Staff::with('StaffDepartment')->get();
        return view('myLayouts.staff.index', ['staff' => $staff]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $departements = Departement::all();
        return view('myLayouts.staff.create', ['departements'=>$departements]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'photo'=>'required|mimes:jpg,png,jpeg',
            'full_name'=>'required',
            'departement_id'=>'required',
            'bio'=>'required',
            'salary_type'=>'required',
            'salary_amount'=>'required',

        ],[
            'photo.required' => 'Please enter a photo !',
            'full_name.required' => 'Please enter a valid name for the Staff !',
            'departement_id.required' => 'Please Select a Department for the Staff !',
            'bio.required' => 'Please enter a bio for the Staff !',
            'salary_type.required' => 'Please Select a Salary Type for the Staff !',
            'salary_amount.required' => 'Please Enter a Salary Amount for the Staff !',
        ]);
        $staff_image = $request->file('photo');
        $name_generate = hexdec(uniqid());
        $img_extension = strtolower($staff_image->getClientOriginalExtension());
        $img_name = $name_generate.'.'.$img_extension;
        $location = 'images/';
        $last_img = $location.$img_name;
        $staff_image->move($location,$img_name);

        Staff::create([
            'photo'=> $last_img,
            'full_name' => $request->full_name,
            'departement_id' => $request->departement_id,
            'bio' => $request->bio,
            'salary_type' => $request->salary_type,
            'salary_amount' => $request->salary_amount,
        ]);
        return redirect('/myLayouts/staff')->with('success','Staff has been created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $staff = Staff::find($id);
        return view('myLayouts.staff.show')->with('staff', $staff);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $staff = Staff::with('StaffDepartment')->find($id);
        $departements = Departement::all();

        return view('myLayouts.staff.edit', ['staff'=>$staff, 'departements'=>$departements]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $staff = Staff::find($id);
        if($request->hasFile('photo')){
            $staff_image = $request->file('photo');
            $name_generate = hexdec(uniqid());
            $img_extension = strtolower($staff_image->getClientOriginalExtension());
            $img_name = $name_generate.'.'.$img_extension;
            $location = 'images/';
            $last_img = $location.$img_name;
            $staff_image->move($location,$img_name);
            $staff->update([
                'photo'=> $last_img,
            ]);
        }
        $request->validate([
            'full_name'=>'required',
            'departement_id'=>'required',
            'bio'=>'required',
            'salary_type'=>'required',
            'salary_amount'=>'required',
        ],[
            'full_name.required' => 'Please enter a valid name for the Staff !',
            'departement_id.required' => 'Please Select a Department for the Staff !',
            'bio.required' => 'Please enter a bio for the Staff !',
            'salary_type.required' => 'Please Select a Salary Type for the Staff !',
            'salary_amount.required' => 'Please Enter a Salary Amount for the Staff !',
        ]);
        $staff->update([
            'full_name' => $request->full_name,
            'departement_id' => $request->departement_id,
            'bio' => $request->bio,
            'salary_type' => $request->salary_type,
            'salary_amount' => $request->salary_amount,
        ]);
        return redirect('myLayouts/staff/'.$id.'/edit')->with('success', 'The Staff has been updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $staff = Staff::find($id);
        $staff->delete();
        return redirect('myLayouts/staff')->with('success', "The Staff has been deleted successfully.");
    }
}
