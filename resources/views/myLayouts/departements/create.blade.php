
@extends('myLayouts.dashboard')
@section('content')
    <div class="container-fluid">
        @if (Session::has('success'))
            <p class="text-success">{{session('success')}}</p>
        @endif
        <div class="card shadow my-5">
            <div class="card-header py-3 d-flex align-items-center justify-content-between">
                <h6 class="m-0 fw-bold">Add Department
                </h6>
                <a href="{{url('myLayouts/departements')}}" class="text-decoration-none btn btn-success">View All</a>
            </div>

            <div class="card-body">
                <form method="post" action="{{url('myLayouts/departements')}}">
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control" id="title" name="title">
                        @error('title')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="detail" class="form-label">Detail</label>
                        <textarea class="form-control" id="detail" name="detail" rows="5"></textarea>
                        @error('detail')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary my-4">Submit</button>
                </form>

            </div>
        </div>

    </div>

@endsection
