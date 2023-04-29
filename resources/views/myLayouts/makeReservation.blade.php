<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     {{-- links bootstrap  start--}}
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
     {{-- links bootstrap  end--}}
     {{-- Icons link --}}
     <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Make Your Reservation </title>
    <link href="{{asset('/css/acceuil.css')}}" rel="stylesheet">
    <link href="{{asset('/css/reservation.css')}}" rel="stylesheet">
</head>
<body>
    <div>
        @include('myLayouts.navbar')
    </div>

    <div id="booking" class="section">
		<div class="section-center">
            
			<div class="container">
                <div class="mb-5">
                    @if (Session::has('message'))
                        <p class="alert alert-success mb-5">{{session('message')}}</p>
                    @endif 
                </div>
             
				<div class="row mx-auto align-items-center " style="background: transparent">
					<div class="col-md-6">
						<div class="booking-cta">
							<h1>Make your reservation</h1>
							<p>At our hotel, we pride ourselves on providing exceptional service and attention to detail. By reserving your room in advance, you can rest assured that we will have everything prepared for your arrival, from a comfortable room to personalized amenities.</p>
						</div>
					</div>
					<div class="col-md-6">
						<div class="booking-form">
							<form action="{{ url('myLayouts/makeReservation/'.$room->id) }}" method="POST">
                                @csrf
                                @method('POST')
								<div class="row">

									<div class="col-md-6">
										<div class="form-group">
                                            <label for="" class="form-label p-0 m-0">Name</label>
											<input class="form-control" type="text" name="name" value="{{ Auth::user()->name }}">
										</div>
                                        <div>
                                            @error('name')
                                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                            @enderror
                                        </div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
                                            <label for="" class="form-label p-0 m-0">Email</label>
											<input class="form-control" type="email" name="email" value="{{ Auth::user()->email }}">
										</div>
                                        <div>
                                            @error('email')
                                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                            @enderror
                                        </div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
                                            <label for="" class="form-label p-0 m-0">Phone</label>
											<input class="form-control" type="text" name="mobile" value="{{ Auth::user()->mobile }}">
										</div>
                                        <div>
                                            @error('mobile')
                                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                            @enderror
                                        </div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
                                            <label for="" class="form-label p-0 m-0">Address</label>
											<input class="form-control" type="text" name="address" value="{{ Auth::user()->address }}">
										</div>
                                        <div>
                                            @error('address')
                                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                            @enderror
                                        </div>
									</div>


								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
                                            <label for="" class="form-label p-0 m-0">Check In</label>
											<input class="form-control" type="date" name="checkin_date" >
										</div>
                                        <div>
                                            @error('checkin_date')
                                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                            @enderror
                                        </div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
                                            <label for="" class="form-label p-0 m-0">Check Out</label>
											<input class="form-control" type="date" name="checkout_date" >
										</div>
                                        <div>
                                            @error('checkout_date')
                                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                            @enderror
                                        </div>
									</div>
								</div>
								<div class="form-btn">
                                    <button type="submit" class="submit-btn"> Send Booking</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
    <div>
        @include('myLayouts.footer')
    </div>
</body>

{{-- links bootstrap  start--}}
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
{{-- links bootstrap  end--}}
{{-- JS --}}
<script src="/js/main.js"></script>
</html>

