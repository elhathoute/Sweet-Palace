@extends('myLayouts.dashboard')
@section('content')
<section class="mt-5">

    <div class="container py-5 h-100">
        <div class="my-3 d-flex justify-content-between align-items-center">
                <p class="m-0 fw-bold">Service Informations</p>
                <a href="{{url('myLayouts/services')}}" class="text-decoration-none btn btn-outline-dark">Return</a>
        </div>
        <div class="row d-flex justify-content-center align-items-center my-5" >
            <div class="card" style="width: 500px;height:auto; border-radius:15px;box-shadow: rgba(0, 0, 0, 0.16) 0px 10px 36px 0px, rgba(0, 0, 0, 0.06) 0px 0px 0px 1px;" >
                <div class="mx-auto mt-5 icon_photo" style="width: 120px; height:120px;">
                    <img src="{{asset($service->photo_icon)}}" class="card-img-top img-fluid" alt="">
                </div>
                <div class="card-body mb-5">
                  <h4 class="card-text text-center my-3">{{$service->title}}</h4>
                  <p class="text-center">{{$service->description}}</p>
                </div>
            </div>
        </div>
    </div>
  </section>
@endsection
