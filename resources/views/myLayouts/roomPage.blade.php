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
    <title>Rooms</title>
    <link href="{{asset('/css/acceuil.css')}}" rel="stylesheet">
    <link href="{{asset('/css/rooms.css')}}" rel="stylesheet">
</head>
<body>
    <div>
        @include('myLayouts.navbar')
    </div>
    <section class="container mt-5" style="max-width: 1600px !important;">
        <div class="row room-bg text-dark d-flex flex-column justify-content-center align-items-center">
            <p class="text-center intro-title">Our Rooms</p>
            <p class="text-center intro-text">Discover our comfortable and elegant rooms for an unforgettable stay at our hotel !</p>
        </div>
        <div class="row gy-4 justify-content-center">
            <div class="col-xl-4 col-md-6 col-xs-10">
                <div class="room-card">
                    <div class="room-card__thumb">
                        <img src="https://script.viserlab.com/viserhotel/assets/images/roomType/HS69JBASW4Q8.jpg" alt="image" class="snipcss0-0-0-1">
                    </div>
                    <div class="room-card__content">
                        <h3 class="title mb-2">
                            <a href="#">
                                Executive Suite
                            </a>
                        </h3>
                        <div class="room-card__bottom justify-content-between align-items-center mt-2 gap-3">
                            <div>
                                <h6 class="price text--base mb-3">
                                    100.00
                                    USD / Night                                        
                                </h6>
                                <div class="room-capacity text--base d-flex align-items-center flex-wrap gap-3">
                                    <span class="custom--badge">
                                        Adult 2
                                    </span>
                                    <span class="custom--badge">
                                        Child 1
                                    </span>
                                    <a href="#" class="btn btn--base"><i class='la bx bx-detail me-2 mt-1'></i> Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6 col-xs-10">
                <div class="room-card">
                    <div class="room-card__thumb">
                        <img src="https://script.viserlab.com/viserhotel/assets/images/roomType/Q9G88MCC97X8.jpg" alt="image">
                    </div>
                    <div class="room-card__content">
                        <h3 class="title mb-2">
                            <a href="#">President Suite</a>
                        </h3>
                        <div class="room-card__bottom justify-content-between align-items-center mt-2 gap-3">
                            <div>
                                <h6 class="price text--base mb-3">
                                    250.00 USD / Night                                        
                                </h6>
                                <div class="room-capacity text--base d-flex align-items-center flex-wrap gap-3">
                                    <span class="custom--badge">
                                        Adult 2
                                    </span>
                                    <span class="custom--badge">
                                        Child 0
                                    </span>
                                    <a href="#" class="btn btn-sm btn--base">
                                        <i class='la bx bx-detail me-2 mt-1'></i>
                                        Details
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6 col-xs-10">
                <div class="room-card">
                    <div class="room-card__thumb">
                        <img src="https://script.viserlab.com/viserhotel/assets/images/roomType/62985ef5c90521654152949.jpg" alt="image">
                    </div>
                    <div class="room-card__content">
                        <h3 class="title mb-2">
                            <a href="#">Murphy</a>
                        </h3>
                        <div class="room-card__bottom justify-content-between align-items-center mt-2 gap-3">
                            <div>
                                <h6 class="price text--base mb-3">
                                    230.00 USD / Night                                        
                                </h6>
                                <div class="room-capacity text--base d-flex align-items-center flex-wrap gap-3">
                                    <span class="custom--badge">
                                        Adult 2
                                    </span>
                                    <span class="custom--badge">
                                        Child 1
                                    </span>
                                    <a href="#" class="btn btn-sm btn-base"><i class='la bx bx-detail me-2 mt-1'></i> Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6 col-xs-10">
                <div class="room-card">
                    <div class="room-card__thumb">
                        <img src="https://script.viserlab.com/viserhotel/assets/images/roomType/5DQ2Q5WR82S6.jpg" alt="image">
        
                    </div>
                    <div class="room-card__content">
                        <h3 class="title mb-2">
                            <a href="">Mini Suite</a>
                        </h3>
                        <div class="room-card__bottom justify-content-between align-items-center mt-2 gap-3">
                            <div>
                                <h6 class="price text--base mb-3">
                                    12.00 USD / Night                                        
                                </h6>
                                <div class="room-capacity text--base d-flex align-items-center flex-wrap gap-3">
                                    <span class="custom--badge">
                                        Adult 1
                                    </span>
                                    <span class="custom--badge">
                                        Child 0
                                    </span>
                                    <a href="#" class="btn btn-sm btn--base">
                                        <i class='la bx bx-detail me-2 mt-1'></i>
                                            Details
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6 col-xs-10">
                <div class="room-card">
                    <div class="room-card__thumb">
                        <img src="https://script.viserlab.com/viserhotel/assets/images/roomType/RCUDWGO3H29K.jpg" alt="image">
                    </div>
                    <div class="room-card__content">
                        <h3 class="title mb-2">
                            <a href="">
                                Walker Cantrell
                            </a>
                        </h3>
                        <div class="room-card__bottom justify-content-between align-items-center mt-2 gap-3">
                            <div>
                                <h6 class="price text--base mb-3">
                                    60.00 USD / Night                                        
                                </h6>
                                <div class="room-capacity text--base d-flex align-items-center flex-wrap gap-3">
                                    <span class="custom--badge">
                                        Adult 1
                                    </span>
                                    <span class="custom--badge">
                                        Child 0
                                    </span>
                                    <a href="#" class="btn btn-sm btn--base"><i class='la bx bx-detail me-2 mt-1'></i> Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6 col-xs-10">
                <div class="room-card">
                    <div class="room-card__thumb">
                        <img src="https://script.viserlab.com/viserhotel/assets/images/roomType/1QXG51HUNCUS.jpg" alt="image">
                    </div>
                    <div class="room-card__content">
                        <h3 class="title mb-2">
                            <a href="#">Luxury Suite</a>
                        </h3>
                        <div class="room-card__bottom justify-content-between align-items-center mt-2 gap-3">
                            <div>
                                <h6 class="price text--base mb-3">
                                        220.00 USD / Night                                        
                                </h6>
                                <div class="room-capacity text--base d-flex align-items-center flex-wrap gap-3">
                                    <span class="custom--badge">
                                        Adult 2
                                    </span>
                                    <span class="custom--badge">
                                        Child 0
                                    </span>
                                    <a href="#" class="btn btn-sm btn--base"><i class='la bx bx-detail me-2 mt-1'></i> Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6 col-xs-10">
                <div class="room-card">
                    <div class="room-card__thumb">
                        <img src="https://script.viserlab.com/viserhotel/assets/images/roomType/HGZ28VU2XTRB.jpg" alt="image">
                    </div>
                    <div class="room-card__content">
                        <h3 class="title mb-2">
                            <a href="#">
                                Accessible Room
                            </a>
                        </h3>
                        <div class="room-card__bottom justify-content-between align-items-center mt-2 gap-3">
                            <div>
                                <h6 class="price text--base mb-3">
                                    350.00
                                    USD / Night                                        
                                </h6>
                                <div class="room-capacity text--base d-flex align-items-center flex-wrap gap-3">
                                    <span class="custom--badge">
                                        Adult  2
                                    </span>
                                    <span class="custom--badge">
                                        Child 2
                                    </span>
                                    <a href="" class="btn btn-sm btn--base"> <i class='la bx bx-detail me-2 mt-1'></i> Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
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

  