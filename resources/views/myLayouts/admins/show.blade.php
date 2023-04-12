@extends('myLayouts.dashboard')
@section('content')

<section class="">
    <div class="container py-5">
        <div class="mt-3 mb-5 d-flex justify-content-end">
            <a href="{{url('myLayouts/admins')}}" class="text-decoration-none btn btn-outline-dark">Return</a>
        </div>
        <div class="row d-flex justify-content-center align-items-center" style="height: 400px">
                <div class="col col-lg-12 mb-4 mb-lg-0">
                    <div class="card mb-3 border-0" style="border-radius:10px; box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
                        <div class="row g-0">
                            <div class="col-md-4 gradient-custom text-center text-white" style="border-top-left-radius:10px; border-bottom-left-radius: 10px">
                                <img src="{{asset($admin->picture)}}" alt="" class="img-fluid my-5" style="width: 140px; border-radius:100%;" />
                                <h5 class="fs-2 fw-bold">{{$admin->firstname . ' '. $admin->lastname}}</h5>
                                <p class="fs-4">Administrator</p>
                                <i class="far fa-edit mb-5"></i>
                            </div>
                            <div class="col-md-6">
                                <div class="card-body p-4">
                                    <h6 class="fs-4">Informations</h6>
                                    <hr class="mt-0 mb-3">
                                    <div class="row pt-1 mt-5">
                                        <div class="col-6 mb-3">
                                            <h6 class="fw-bold">Firstname :</h6>
                                            <p class="text-muted">{{$admin->firstname}}</p>
                                        </div>
                                        <div class="col-6 mb-3">
                                            <h6 class="fw-bold">Lastname :</h6>
                                            <p class="text-muted">{{$admin->lastname}}</p>
                                        </div>
                                    </div>
                                    <div class="row pt-1">
                                        <div class="col-6 mb-3">
                                            <h6 class="fw-bold">Email Address :</h6>
                                            <p class="text-muted">{{$admin->email}}</p>
                                        </div>
                                        <div class="col-6 mb-3">
                                            <h6 class="fw-bold">Mobile :</h6>
                                            <p class="text-muted">{{$admin->mobile}}</p>
                                        </div>
                                    </div>

                                    <div class="row pt-1">
                                        <div class="col-12 mb-3">
                                            <h6 class="fw-bold">Address :</h6>
                                            <p class="text-muted">{{$admin->address}}</p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
  </section>

@endsection
