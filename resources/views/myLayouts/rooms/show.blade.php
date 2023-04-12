@extends('myLayouts.dashboard')
@section('content')
<div class="mt-3 d-flex justify-content-end">
    <a href="{{url('myLayouts/rooms')}}" class="text-decoration-none btn btn-outline-dark">Return</a>
</div>
<div class="card mt-5 mb-4 w-75 mx-auto">
    <img src="{{asset($room->RoomType->image_path)}}" class="card-img-top img-fluid" alt="..." style="height: 450px;">
    <div class="card-body">
      <h3 class="card-title">{{$room->title}}</h3>
      <h5 class="card-text">{{$room->RoomType->title}}</h5>
      <p class="card-text">{{$room->RoomType->detail}}</p>
    </div>
  </div>
@endsection
