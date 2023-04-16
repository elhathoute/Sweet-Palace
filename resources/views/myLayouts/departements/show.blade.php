
@extends('myLayouts.dashboard')
@section('content')
<div class="mt-3 d-flex justify-content-end">
    <a href="{{url('myLayouts/departements')}}" class="text-decoration-none btn btn-outline-dark">Return</a>
</div>
<div class="card my-5 rounded-3" style="">
    <div class="row g-0">
      <div class="col-md-7 py-3 my-auto">
        <div class="card-body py-3">
          <h5 class="card-title fs-2 fw-bold my-3">{{$departement->title}}</h5>
          <p class="card-text fs-5">{{$departement->detail}}</p>
        </div>
      </div>
    </div>
</div>
@endsection
