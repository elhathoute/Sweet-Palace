@extends('myLayouts.dashboard')
@section('content')

<div class="container-fluid">
    @if (Session::has('success'))
        <p class="alert alert-success mt-1 mb-1">{{session('success')}}</p>
    @endif
    <div class="card shadow my-5">
        <div class="card-header py-3 d-flex align-items-center justify-content-between">
            <h6 class="m-0 fw-bold">Update Amenity</h6>
            <a href="{{url('myLayouts/amenities')}}" class="text-decoration-none btn btn-success">View All</a>
        </div>

        <div class="card-body">
            <form method="post" action="{{url('myLayouts/amenities/' . $amenity->id)}}">
                @csrf
                @method('put')
                <input type="hidden" name="id" id="id" value="{{$amenity->id}}">

                <div class="mb-3">
                    <label for="name" class="form-label">Amenity Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{$amenity->name}}">
                    @error('name')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary my-4">Submit</button>
            </form>
        </div>
    </div>

</div>

@endsection
