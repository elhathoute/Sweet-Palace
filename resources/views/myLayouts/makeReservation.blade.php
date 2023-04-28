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
				<div class="row" style="background: transparent">
					<div class="col-md-5">
						<div class="booking-cta">
							<h1>Make your reservation</h1>
							<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate laboriosam numquam at</p>
						</div>
					</div>
					<div class="col-md-6 col-md-offset-1">
						<div class="booking-form">
							<form>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
                                            <label for="" class="form-label p-0 m-0">Name</label>
											<input class="form-control" type="text" value="{{ Auth::user()->name }}">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
                                            <label for="" class="form-label p-0 m-0">Email</label>
											<input class="form-control" type="email"value="{{ Auth::user()->email }}">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
                                            <label for="" class="form-label p-0 m-0">Phone</label>
											<input class="form-control" type="tel" value="{{ Auth::user()->mobile }}">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
                                            <label for="" class="form-label p-0 m-0">Address</label>
											<input class="form-control" type="tel" value="{{ Auth::user()->address }}">
										</div>
									</div>
								

								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
                                            <label for="" class="form-label p-0 m-0">Check In</label>
											<input class="form-control" type="date" required>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
                                            <label for="" class="form-label p-0 m-0">Check Out</label>
											<input class="form-control" type="date" required>
										</div>
									</div>
								</div>
								<div class="form-btn">
									<button class="submit-btn">Book Now</button>
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
<script>
    // $('.form-control').each(function () {
    //     floatedLabel($(this));
    // });

    // $('.form-control').on('input', function () {
    //     floatedLabel($(this));
    // });

    // function floatedLabel(input) {
    //     var $field = input.closest('.form-group');
    //     if (input.val()) {
    //         $field.addClass('input-not-empty');
    //     } else {
    //         $field.removeClass('input-not-empty');
    //     }
    // }
</script>
{{-- links bootstrap  start--}}
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
{{-- links bootstrap  end--}}
{{-- JS --}}
<script src="/js/main.js"></script>
</html>

