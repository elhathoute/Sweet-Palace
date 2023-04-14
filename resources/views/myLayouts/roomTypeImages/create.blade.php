@extends('myLayouts.dashboard')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Upload images For the Room Type</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('roomTypeImages.store', $roomType) }}" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="roomType_id" class="form-label">Select Room Type</label>
                            <select class="form-select" id="roomType_id" name="roomType_id">
                                <option value="0" selected>---Select---</option>
                                @foreach ( )
                                    <option value=""></option>
                                @endforeach
                            </select>
                            @error('roomType_id')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="images">Choose Images</label>
                            <input id="images" type="file" class="form-control @error('images.*') is-invalid @enderror" name="images[]" multiple  accept="image/*">

                            @error('images.*')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">
                                Upload
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
