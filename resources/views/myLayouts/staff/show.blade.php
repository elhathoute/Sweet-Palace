@extends('myLayouts.dashboard')
@section('content')
<section class="mt-5">

    <div class="container py-5 h-100">
        <div class="my-3 d-flex justify-content-between align-items-center">
                <p class="m-0 fw-bold">Staff Informations</p>
                <a href="{{url('myLayouts/staff')}}" class="text-decoration-none btn btn-outline-dark">Return</a>
        </div>
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-md-12 col-xl-12">
                <div class="card border-0 mt-5" style="border-radius: 15px;box-shadow: rgba(0, 0, 0, 0.56) 0px 22px 70px 4px;">
                    <div class="card-body text-center">
                        <div class="mt-3 mb-4">
                            <img src="{{asset($staff->photo)}}"
                            class="rounded-circle img-fluid" style="width: 100px;" />
                        </div>
                        <h4 class="mb-2">{{$staff->full_name}}</h4>
                        <p class="text-muted mb-4"> Staff at <span class="fw-bold text-success ms-2">{{$staff->StaffDepartment->title}} </span> </p>

                        <div class="">
                            <h4>Staff Bio</h4>
                            <p>{{$staff->bio}}</p>
                        </div>
                        <div class="d-flex justify-content-around text-center mt-5 mb-2">
                            <div class="px-3">
                                <p class="mb-2 h5">Salary Type</p>
                                <p class="text-muted mb-0">{{$staff->salary_type}}</p>
                            </div>
                            <div>
                                <p class="mb-2 h5">Salary Amount</p>
                                <p class="text-muted mb-0">{{$staff->salary_amount}} MAD</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </section>
@endsection
