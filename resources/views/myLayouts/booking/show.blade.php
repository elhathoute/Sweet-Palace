@extends('myLayouts.dashboard')
@section('content')
<section class="container">
    <div class="mt-3 d-flex justify-content-end">
        <a href="{{url('myLayouts/booking')}}" class="text-decoration-none btn btn-outline-dark">Return</a>
    </div>
    <div class="card text-center mt-5" >
        <div class="card-header bg-white">
           <h5 class="fw-bolder">Booking Informations</h5>
        </div>
        <div class="card-body px-2 py-5">
            <h5 class="card-title mb-3">Booking Number : <span class="fw-bold ms-2"> {{$booking->id}}</span></h5>
            <h6 class="card-text mb-3">Client : <span class="fw-bold ms-2">{{$booking->user->name}} </span></h6>
            <h6 class="card-text mb-3">Room Reserved : <span class="fw-bold ms-2">{{$booking->room->title}}</span></h6>
            <div class="d-flex justify-content-center gap-4 mt-4">
                <h6 class="card-text mb-2">Check In Date: <span class="fw-bold ms-2">{{$booking->checkin_date}}</span></h6>
                <h6 class="card-text mb-2">Check Out Date : <span class="fw-bold ms-2">{{$booking->checkout_date}}</span></h6>
                <h6 class="card-text mb-2">Adults Number : <span class="fw-bold ms-2">{{$booking->total_adults}}</span></h6>
                <h6 class="card-text mb-2">Children Number : <span class="fw-bold ms-2">{{$booking->total_children}}</span></h6>
            </div>
        </div>
        <div class="card-footer text-body-secondary">
            <h6 class="card-text mb-2"> Booking created at : <span class="fw-bold ms-2">{{$booking->created_at}}</span></h6>
        </div>
    </div>
</section>


{{-- <div class="card mt-5 mb-4 w-75 mx-auto">
    <img src="{{asset($room->RoomType->image_path)}}" class="card-img-top img-fluid" alt="..." style="height: 450px;">
    <div class="card-body">
      <h3 class="card-title">{{$room->title}}</h3>
      <h5 class="card-text">{{$room->RoomType->title}}</h5>
      <p class="card-text">{{$room->RoomType->detail}}</p>
    </div>
  </div> --}}
@endsection
