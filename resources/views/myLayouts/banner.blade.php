<section id="home" class="banner_wrapper p-0 mb-5">
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            <!-- Slides -->
            <div class="swiper-slide" style="background-image: url('/images/hotel1.jpg')">
                <div class="slide-caption text-center">
                    <div>
                        <p class="slide-title">Welcome to our hotel</p>
                        <p class="slide-text">We are delighted to have you as our guest and to offer you an unforgettable experience. Our hotel features comfortable rooms, quality service, and modern facilities to meet all your needs. </p>
                        <p class="slide-text">We hope you will have a pleasant and memorable stay with us.</p>
                    </div>
                 </div>
            </div>
            <div class="swiper-slide" style="background-image: url('/images/hotel2.jpg')">
                <div class="slide-caption text-center">
                    <div>
                        <p class="slide-title">Welcome to our hotel </p>
                        <p class="slide-text">We are delighted to have you as our guest and to offer you an unforgettable experience. Our hotel features comfortable rooms, quality service, and modern facilities to meet all your needs. </p>
                        <p class="slide-text">We hope you will have a pleasant and memorable stay with us.</p>
                    </div>
                 </div>
            </div>
            <div class="swiper-slide" style="background-image: url('/images/hotel3.jpg')">
                <div class="slide-caption text-center">
                    <div>
                        <p class="slide-title">Welcome to our hotel </p>
                        <p class="slide-text">We are delighted to have you as our guest and to offer you an unforgettable experience. Our hotel features comfortable rooms, quality service, and modern facilities to meet all your needs. </p>
                        <p class="slide-text">We hope you will have a pleasant and memorable stay with us.</p>
                    </div>
                 </div>
            </div>
            <div class="swiper-slide" style="background-image: url('/images/hotel4.jpg')">
                <div class="slide-caption text-center">
                    <div>
                        <p class="slide-title">Welcome to our hotel</p>
                        <p class="slide-text">We are delighted to have you as our guest and to offer you an unforgettable experience. Our hotel features comfortable rooms, quality service, and modern facilities to meet all your needs. </p>
                        <p class="slide-text">We hope you will have a pleasant and memorable stay with us.</p>
                    </div>
                 </div>
            </div>

        </div>
            <!-- If we need pagination -->
            <div class="swiper-pagination"></div>
    </div>
    <div class="container booking-area mb-5">
        <form class="row" action="{{url('available_rooms')}}" method="GET">
            @csrf
            <div class="col-lg mb-3 mb-lg-0">
                <input type="date" class="form-control" placeholder="Check in " name="checkin_date">
                <div>
                    @error('checkin_date')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            
            <div class="col-lg mb-3 mb-lg-0">
                <input type="date" class="form-control" placeholder="Check Out" name="checkout_date">
                <div>
                    @error('checkout_date')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            
            <div class="col-lg mb-3 mb-lg-0">
                <input type="number" class="form-control" name="adults" id="adults" placeholder="Adults">
                <div>
                    @error('adults')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            
            <div class="col-lg mb-3 mb-lg-0">
                <input type="number" class="form-control" name="children" id="children" placeholder="Children">
                <div>
                    @error('children')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            
            <div class="col-lg mb-3 mb-lg-0">
                <button type="submit" class="main-btn btn btn-outline-dark rounded-2 px-lg-4 py-lg-2">Check Availability</button>
            </div>
        </form>
    </div>

</section>
