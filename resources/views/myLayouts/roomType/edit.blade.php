@extends('myLayouts.dashboard')
@section('content')

<div class="container-fluid">
    @if (Session::has('success'))
        <p class="alert alert-success mt-1 mb-1">{{session('success')}}</p>
    @endif
    <div class="card shadow my-5">
        <div class="card-header py-3 d-flex align-items-center justify-content-between">
            <h6 class="m-0 fw-bold">Update RoomType</h6>
            <a href="{{url('myLayouts/roomType')}}" class="text-decoration-none btn btn-success">View All</a>
        </div>

        <div class="card-body">
            <form method="post" action="{{url ('myLayouts/roomType/'. $data->id)}}" enctype="multipart/form-data">
                @csrf
                @method('put')
                <input type="hidden" name="id" id="id" value="{{$data->id}}">
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{$data->title}}">
                    <div class="titleError"></div>
                </div>
                <div class="mb-3">
                    <label for="detail" class="form-label">Detail</label>
                    <textarea class="form-control" id="detail" name="detail" rows="5">{{$data->detail}}</textarea>
                    <div class="detailError"></div>
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Price</label>
                    <input type="number" class="form-control" id="price" name="price" value="{{$data->price}}">
                    <div class="priceError"></div>
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Cover</label>
                    <input type="file" class="form-control" id="image" name="image_path" value="{{$data->image_path}}">
                    <div class="imageError"></div>
                </div>
                <button type="submit" class="btn btn-primary my-4">Submit</button>
            </form>

        </div>
    </div>

</div>

@endsection
