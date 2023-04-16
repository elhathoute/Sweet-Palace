
@extends('myLayouts.dashboard')
@section('content')
<div class="container-fluid">
    @if (Session::has('success'))
        <p class="text-success">{{session('success')}}</p>
    @endif
    <div class="card shadow my-5">
        <div class="card-header py-3 d-flex align-items-center justify-content-between">
            <h6 class="m-0 fw-bold">Add Staff</h6>
            <a href="{{url('myLayouts/staff')}}" class="text-decoration-none btn btn-success">View All</a>
        </div>

        <div class="card-body">
            <form method="post" action="{{url('myLayouts/staff')}}"  enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="photo" class="form-label">Photo</label>
                    <input type="file" class="form-control" id="photo" name="photo">
                    @error('photo')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="full_name" class="form-label">Full Name</label>
                    <input type="text" class="form-control" id="full_name" name="full_name">
                    @error('full_name')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="departement_id" class="form-label">Select Department</label>
                    <select class="form-select" id="departement_id" name="departement_id">
                        <option value="0" selected>---Select---</option>
                        @foreach ($departements as $dt)
                            <option value="{{$dt->id}}">{{$dt->title}}</option>
                        @endforeach
                    </select>
                    @error('departement_id')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="bio" class="form-label">Bio</label>
                    <textarea class="form-control" id="bio" name="bio" rows="4"></textarea>
                    @error('bio')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="salary_type" class="form-label">Salary Type</label>
                    <div class="mb-3 d-flex gap-4">
                        <div class="d-flex gap-2">
                            <input type="radio" name="salary_type" value="Daily">Daily
                        </div>
                        <div class="d-flex gap-2">
                            <input  type="radio" name="salary_type" value="Monthly">Monthly
                        </div>
                    </div>
                    @error('salary_type')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="salary_amount" class="form-label">Salary Amount</label>
                    <input type="number" class="form-control" id="salary_amount" name="salary_amount">
                    @error('salary_amount')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary my-4">Submit</button>
            </form>

        </div>
    </div>

</div>

@endsection
