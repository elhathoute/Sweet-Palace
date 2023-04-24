@extends('myLayouts.dashboard')
@section('content')

<div class="container-fluid">
    @if (Session::has('success'))
        <p class="alert alert-success mt-1 mb-1">{{session('success')}}</p>
    @endif
    <div class="card shadow my-5">
        <div class="card-header py-3 d-flex align-items-center justify-content-between">
            <h6 class="m-0 fw-bold">Update Image</h6>
            <a href="{{url('myLayouts/gallery')}}" class="text-decoration-none btn btn-success">View All</a>
        </div>

        <div class="card-body">
            <form method="post" action="{{url('myLayouts/gallery/' . $picture->id)}}"  enctype="multipart/form-data">
                @csrf
                @method('put')
                <input type="hidden" name="id" id="id" value="{{$picture->id}}">
                <div class="mb-3">
                    <label for="pictures" class="form-label">Image</label>
                    <input type="file" class="form-control" id="pictures" name="pictures" value="{{$picture->pictures}}">
                    <img src="{{asset($picture->pictures)}}" alt="" class="img-fluid" style="width: 100px; height:100px">
                    @error('pictures')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                
                <button type="submit" class="btn btn-primary my-4">Submit</button>
            </form>
        </div>
    </div>

</div>

@endsection
