@extends('myLayouts.dashboard')
@section('content')

<div class="container-fluid">
    @if (Session::has('success'))
        <p class="alert alert-success mt-1 mb-1">{{session('success')}}</p>
    @endif
    <div class="card shadow my-5">
        <div class="card-header py-3 d-flex align-items-center justify-content-between">
            <h6 class="m-0 fw-bold">Update Service</h6>
            <a href="{{url('myLayouts/services')}}" class="text-decoration-none btn btn-success">View All</a>
        </div>

        <div class="card-body">
            <form method="post" action="{{url('myLayouts/services/' . $service->id)}}"  enctype="multipart/form-data">
                @csrf
                @method('put')
                <input type="hidden" name="id" id="id" value="{{$service->id}}">
                <div class="mb-3">
                    <label for="photo_icon" class="form-label">Photo</label>
                    <input type="file" class="form-control" id="photo_icon" name="photo_icon" value="{{$service->photo_icon}}">
                    @error('photo_icon')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="title" class="form-label">Service Title</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{$service->title}}">
                    @error('title')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Service Description</label>
                    <textarea class="form-control" id="description" name="description" rows="4">{{$service->description}}</textarea>
                    @error('description')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary my-4">Submit</button>
            </form>
        </div>
    </div>

</div>

@endsection
