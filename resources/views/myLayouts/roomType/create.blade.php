
@extends('myLayouts.dashboard')
@section('content')
<div class="container-fluid">
    @if (Session::has('success'))
        <p class="text-success">{{session('success')}}</p>
    @endif
    <div class="card shadow my-5">
        <div class="card-header py-3 d-flex align-items-center justify-content-between">
            <h6 class="m-0 fw-bold">Add RoomType</h6>
            <a href="{{url('myLayouts/roomType')}}" class="text-decoration-none btn btn-success">View All</a>
        </div>

        <div class="card-body">
            <form method="post" action="{{url('myLayouts/roomType')}}" enctype="multipart/form-data">
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
                <div class="mb-3">
                    <label for="adults" class="form-label">Adults</label>
                    <input type="number" class="form-control" id="adults" name="adults">
                    @error('adults')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="children" class="form-label">Children</label>
                    <input type="number" class="form-control" id="children" name="children">
                    @error('children')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="amenities" class="form-label">Amenities</label>
                    <select class="form-select" id="amenities" name="amenities[]" multiple>
                        @foreach ($amenities as $at)
                            <option value="{{$at->id}}">{{$at->name}}</option>
                        @endforeach
                    </select>
                    @error('amenities')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="beds" class="form-label">Beds</label>
                    <select class="form-select" id="beds" name="beds[]" multiple>
                        @foreach ($beds as $bed)
                            <option value="{{$bed->id}}">{{$bed->name}}</option>
                        @endforeach
                    </select>
                    @error('beds')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="complements" class="form-label">Complements</label>
                    <select class="form-select" id="complements" name="complements[]" multiple>
                        @foreach ($complements as $complement)
                            <option value="{{$complement->id}}">{{$complement->name}}</option>
                        @endforeach
                    </select>
                    @error('complements')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="price" class="form-label">Price</label>
                    <input type="number" class="form-control" id="price" name="price">
                    @error('price')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="image" class="form-label">Cover</label>
                    <input type="file" class="form-control" id="image" name="image_path">
                    @error('image_path')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="images" class="form-label">Images</label>
                    <input type="file" class="form-control" id="images" name="images[]" multiple>
                    @error('images')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary my-4">Submit</button>
            </form>

        </div>
    </div>

</div>

@endsection
