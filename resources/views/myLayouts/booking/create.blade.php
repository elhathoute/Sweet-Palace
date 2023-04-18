
@extends('myLayouts.dashboard')
@section('content')
    <div class="container-fluid">
        @if (Session::has('success'))
            <p class="text-success">{{session('success')}}</p>
        @endif
        <div class="card shadow my-5">
            <div class="card-header py-3 d-flex align-items-center justify-content-between">
                <h6 class="m-0 fw-bold">Add Booking</h6>
                <a href="{{url('myLayouts/booking')}}" class="text-decoration-none btn btn-success">View All</a>
            </div>

            <div class="card-body">
                <form id="booking-form" method="post" action="{{url('myLayouts/booking')}}">
                    @csrf

                    <div class="mb-3">
                        <label for="user_id" class="form-label">Select User</label>
                        <select class="form-select" id="user_id" name="user_id">
                            <option value="0" selected>---Select---</option>
                            @foreach ($users as $user)
                                <option value="{{$user->id}}">{{$user->name}}</option>
                            @endforeach
                        </select>
                        @error('user_id')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- <div class="mb-3">
                        <label for="room_id" class="form-label">Select Room</label>
                        <select class="form-select" id="room_id" name="room_id">
                            <option value="0" selected>---Select---</option>
                            @foreach ($rooms as $room)
                                <option value="{{$room->id}}">{{$room->title}}</option>
                            @endforeach
                        </select>
                        @error('room_id')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div> --}}

                     <div class="mb-3">
                        <label for="checkin_date" class="form-label">Check In</label>
                        <input type="date" class="form-control" id="checkin_date" name="checkin_date">
                        @error('checkin_date')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>

                     <div class="mb-3">
                        <label for="checkout_date" class="form-label">Check Out</label>
                        <input type="date" class="form-control" id="checkout_date" name="checkout_date">
                        @error('checkout_date')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>

                     <div class="mb-3">
                        <label for="availabale_rooms" class="form-label">Availabale Rooms</label>
                        <select class="form-select room-list" id="availabale_rooms" name="room_id">

                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="total_adults" class="form-label">Adults</label>
                        <input type="number" class="form-control" id="total_adults" name="total_adults">
                        @error('total_adults')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="total_children" class="form-label">Children</label>
                        <input type="number" class="form-control" id="total_children" name="total_children">
                        @error('total_children')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary my-4">Submit</button>
                </form>

            </div>
        </div>

    </div>
    @section('scripts')
    <script type="text/javascript">
        $(document).ready(function(){
            $("#checkin_date").on('blur', function(){
                var _checkindate = $(this).val();
                $.ajax({
                    url:"{{url('myLayouts/booking')}}/available-rooms/"+_checkindate,
                    datatype:'json',
                    beforeSend:function(){
                        $('.room-list').html('<option>Loading Available Rooms</option>');
                    },
                    success:function(res){
                        var _html = '';
                        $.each(res.data, function(index, row){
                            _html += '<option value="'+row.id+'">'+row.title+'</option>'
                        });
                        $('.room-list').html(_html);
                    }
                });
            });
        });
    </script>
@endsection

@endsection
