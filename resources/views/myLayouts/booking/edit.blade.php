@extends('myLayouts.dashboard')
@section('content')

<div class="container-fluid">
    @if (Session::has('success'))
        <p class="alert alert-success mt-1 mb-1">{{session('success')}}</p>
    @endif
    <div class="card shadow my-5">
        <div class="card-header py-3 d-flex align-items-center justify-content-between">
            <h6 class="m-0 fw-bold">Update Booking</h6>
            <a href="{{url('myLayouts/booking')}}" class="text-decoration-none btn btn-success">View All</a>
        </div>

        <div class="card-body">
            <form method="post" action="{{url ('myLayouts/booking/'. $booking->id)}}">
                @csrf
                @method('put')
                <input type="hidden" name="id" id="id" value="{{$booking->id}}">
               
                <div class="mb-3">
                    <label for="user_id" class="form-label">Select User</label>
                    <select class="form-select" id="user_id" name="user_id">
                        <option value="0" selected>---Select---</option>
                        @foreach ($user as $u)
                            <option @if($booking->user_id==$u->id) selected @endif value="{{$u->id}}">{{$u->name}}</option>
                        @endforeach
                    </select>
                    @error('user_id')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="room_id" class="form-label">Select Room</label>
                    <select class="form-select" id="room_id" name="room_id">
                        <option value="0" selected>---Select---</option>
                        @foreach ($room as $r)
                            <option @if($booking->room_id==$r->id) selected @endif value="{{$r->id}}">{{$r->title}}</option>
                        @endforeach
                    </select>
                    @error('room_id')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="checkin_date" class="form-label">Check In</label>
                    <input type="date" class="form-control" id="checkin_date" name="checkin_date" value="{{$booking->checkin_date}}">
                    @error('checkin_date')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="checkout_date" class="form-label">Check Out</label>
                    <input type="date" class="form-control" id="checkout_date" name="checkout_date" value="{{$booking->checkout_date}}">
                    @error('checkout_date')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="total_adults" class="form-label">Adults</label>
                    <input type="number" class="form-control" id="total_adults" name="total_adults" value="{{$booking->total_adults}}">
                    @error('total_adults')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="total_children" class="form-label">Children</label>
                    <input type="number" class="form-control" id="total_children" name="total_children" value="{{$booking->total_children}}">
                    @error('total_children')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary my-4">Update Booking</button>
            </form>

        </div>
    </div>

</div>

@endsection
