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
    <section class="container my-5" style="max-width: 1600px !important;">
        <div class="row mb-5 d-flex flex-column justify-content-center align-items-center section-head col-sm-12">
            <h3 class="text-center intro-title"><span>Our </span> Rooms</h3>
            <p class="text-center intro-text">Explore our selection of luxurious and comfortable rooms to find the perfect accommodation for your stay at our hotel.</p>
        </div>
        <div class="row gy-4 justify-content-center">
            @if($rooms)
                 @foreach ($rooms as $r )
                    <div class="col-xl-4 col-md-6 col-xs-10">
                        <div class="room-card">
                            <div class="room-card__thumb">
                                <img src="{{asset($r->RoomType->image_path)}}" alt="image">
                            </div>
                            <div class="room-card__content">
                                <div class="d-flex justify-content-between">
                                    <h3 class="title mb-2">
                                        <a href="#">
                                            {{$r->title}}
                                        </a>
                                    </h3>
                                    <h6>
                                        @if($r->available == 1)
                                            <span class="py-1 px-2" style="background-color: #98D8AA;font-size:12px;">available</span>
                                        @else
                                            <span class="py-1 px-2" style="background-color: #EA5455;font-size:12px;">not available</span>
                                        @endif
                                    </h6>
                                </div>

                                <div class="room-card__bottom justify-content-between align-items-center mt-2 gap-3">
                                    <div>
                                        <h6 class="price text--base mb-3">
                                            {{$r->RoomType->price}} MAD / Night
                                        </h6>
                                        <div class="room-capacity text--base d-flex align-items-center flex-wrap gap-3">
                                            <span class="custom--badge">
                                                Adult {{$r->RoomType->adults}}
                                            </span>
                                            <span class="custom--badge">
                                                Child {{$r->RoomType->children}}
                                            </span>
                                            <a href="{{url('myLayouts/bookingPage/'.$r->id)}}" class="btn btn--base"><i class='la bx bx-detail me-2 mt-1'></i> Details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
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

