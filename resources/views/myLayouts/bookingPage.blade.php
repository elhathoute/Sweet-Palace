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
    <title>Booking Room</title>
    <link href="{{asset('/css/acceuil.css')}}" rel="stylesheet">
</head>
<body>
    <div>
        @include('myLayouts.navbar')
    </div>
    <section>

        <div class="container my-4">
            <div class="row g-4 justify-content-center">
                <div class="col-lg-12 d-flex flex-column">
                    <div class="room-details-head d-flex justify-content-between align-items-center rounded-2" style="position: relative;top:60px;width: 900px;
                    ;z-index:1;background-color:#e9e9dcf2; padding:28px 57px; margin:auto auto;">
                        <div class="">
                            <h1 class="title fs-4 fw-bold"> {{$room->title}}</h1>
                            <div class="d-flex justify-content-center flex-wrap gap-2 fs-6">
                                <span>Adults {{$room->Roomtype->adults}}</span>
                                <span>Child  {{$room->Roomtype->children}}</span>
                            </div>
                        </div>
                        <div class="">
                            <h1 class="text-base fs-4 fw-bold">{{$room->Roomtype->price}} MAD</h1>
                            <span class="fs-6" style="text-align: center">/ Night</span>
                        </div>
                    </div>
                    <div class="room-detail-thumb mb-3" style="margin: auto auto;">
                        <img src="{{asset($room->Roomtype->image_path)}}"  alt="" class="img-cover" style="max-width: 1000px;">
                    </div>
                    <div class="room-details-nav d-flex flex-wrap justify-content-between gap-3" style=" margin: 12px auto;">
                        @foreach ($room->Roomtype->roomTypeImgs as $item)
                        <div style="">
                            <img src="{{asset($item->image)}}" alt="" style="width: 200px; height:120px;" class="booking-img">
                        </div>
                        @endforeach

                    </div>
                    <div class="room-details cardd" style="margin-top:50px;">
                        <h5 class="title fs-5 fw-bold">Description</h5>
                        <hr>
                        <div class="body">
                            <p>
                                {{$room->Roomtype->detail}}
                            </p>
                        </div>
                    </div>
                    <div class="room-details cardd " style="margin-top:50px;">
                        <h5 class="title fs-5 fw-bold">Amenities</h5>
                        <hr>
                        <div class="body">
                            <div class="d-inline-flex flex-md-row flex-column gap-md-5 flex-wrap gap-3">
                                @foreach ($room->RoomType->amenities as $item)
                                    <span class="me-2">
                                        <i class='bx bx-check-double' ></i>
                                        {{$item->name}}
                                    </span>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="room-details cardd" style="margin-top:50px;">
                        <h5 class="title fs-5 fw-bold">Complements</h5>
                        <hr>
                        <div class="body">
                            <div class="d-inline-flex flex-md-row flex-column gap-md-5 flex-wrap gap-3">
                                    @foreach ($room->RoomType->complements as $item)
                                        <span class="me-2">
                                            <i class='bx bx-check-double' ></i>
                                            {{$item->name}}
                                        </span>
                                    @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="room-details cardd" style="margin-top:50px;">
                        <h5 class="title fs-5 fw-bold">Beds</h5>
                        <hr>
                        <div class="body">
                            <div class="d-inline-flex flex-md-row flex-column gap-md-5 flex-wrap gap-3">
                                @foreach ($room->RoomType->beds as $item)
                                    <span class="me-2">
                                        <i class='bx bx-check-double' ></i>
                                        {{$item->name}}
                                    </span>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mx-auto d-flex align-items-center justify-content-center my-4">
                    @if (auth()->check())
                        <a href="{{url('myLayouts/makeReservation/'. $room->id)}}" class="btn btn-outline-dark w-50 py-3 fw-bold" style="font-size: 20px"> Book Now</a>
                    @else
                        <a href="{{ route('login') }}" class="btn btn-outline-dark w-50 py-3 fw-bold" style="font-size: 20px">Book Now</a>
                    @endif
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

