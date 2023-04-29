<section id="rooms" class="rooms_wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 text-center mb-5">
                <h6>What Can I do For you</h6>
                <h3 class="section-title">Our Favorite Rooms</h3>
                <hr class="line">
            </div>
        </div>
        <div class="row m-0 d-flex align-items-center justify-content-around">
            @foreach ($all_rooms as $room)

                <div class="card col-md-4 mb-4 mb-lg-0">
                    <img src="{{asset($room->RoomType->image_path)}}" class="room img-fluid" alt="">
                        <div class="card-content">
                            <h2 class="card-title text-white mb-lg-3">{{$room->title}}</h2>
                            <h4 class="card-text text-white"> {{$room->RoomType->Title}} </h4>
                            <p class="card-text text-white text-truncate" style="max-width: 250px;">{{$room->RoomType->detail}}</p>
                            <p class="card-text text-white">Adults :<span> {{$room->RoomType->adults}}</span> <span> - Children : </span> {{$room->RoomType->children}}</p>
                            <p class="card-text text-white fw-bold mt-lg-4 fs-5"><span>{{$room->RoomType->price}}</span> / per night</p>
                            <a class="card-link book-btn text-decoration-none btn-outline-dark rounded-2 px-lg-4 py-lg-2" href="{{url('myLayouts/bookingPage/'.$room->id)}}"> More Details</a>
                        </div>
                </div>
            @endforeach
            </div>
        </div>
    </div>
</section>
