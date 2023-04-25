
@extends('myLayouts.dashboard')
@section('content')
<div class="container-fluid">
    @if (Session::has('success'))
        <p class="alert alert-success mt-1 mb-1">{{session('success')}}</p>
    @endif
    @if (Session::has('success1'))
        <p class="alert alert-danger mt-1 mb-1">{{session('success1')}}</p>
    @endif

    <div class="container">
        <div class="py-3 d-flex align-items-center justify-content-between">
            <h6 class="m-0 fw-bold">Gallery</h6>
            <a href="{{url('myLayouts/gallery/create')}}" class="text-decoration-none btn btn-success">Add New Image</a>
        </div>
        <div class="row row-cols-1 row-cols-md-3 g-4 my-5">
            @if($pictures)
                 @foreach ($pictures as $p)
                    <div class="col">
                        <div class="" style="" >
                            <img src="{{asset($p->pictures)}}" class="gallery-pic card-img-top" alt="..." style="height: 280px; border-radius:15px; box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;">
                        </div>
                        <div class="d-flex justify-content-center mt-3">
                            <a href="{{url('myLayouts/gallery/'.$p->id.'/edit')}}" class="btn btn-success btn-sm me-3 px-4">Edit</i></a>
                            <form action="{{ url('myLayouts/gallery'. '/'.$p->id)}}" method="POST">
                                @csrf
                                @method("DELETE")
                                <button onclick="return confirm('Are you sure to delete this Image ?')" class="btn btn-danger btn-sm me-3 px-2">Delete</button>
                            </form>
                       </div>
                   </div>

                @endforeach
            @endif
        </div>

    </div>

</div>

@endsection
