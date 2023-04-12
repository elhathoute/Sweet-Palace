@extends('myLayouts.dashboard')
@section('content')

<div class="container-fluid">
    @if (Session::has('success'))
        <p class="alert alert-success mt-1 mb-1">{{session('success')}}</p>
    @endif
    <div class="card shadow my-5">
        <div class="card-header py-3 d-flex align-items-center justify-content-between">
            <h6 class="m-0 fw-bold">Update Room</h6>
            <a href="{{url('myLayouts/rooms')}}" class="text-decoration-none btn btn-success">View All</a>
        </div>

        <div class="card-body">
            <form method="post" action="{{url ('myLayouts/rooms/'. $room->id)}}">
                @csrf
                @method('put')
                <input type="hidden" name="id" id="id" value="{{$room->id}}">
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{$room->title}}">
                    @error('title')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="roomType_id" class="form-label">Select Room Type</label>
                    <select class="form-select" id="roomType_id" name="roomType_id">
                        <option value="0" selected>---Select---</option>
                        @foreach ($roomTypes as $rt)
                            <option @if($room->roomType_id==$rt->id) selected @endif value="{{$rt->id}}">{{$rt->title}}</option>
                        @endforeach
                    </select>
                    @error('roomType_id')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary my-4">Submit</button>
            </form>

        </div>
    </div>

</div>

@endsection
