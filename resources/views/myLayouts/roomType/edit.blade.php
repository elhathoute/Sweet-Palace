@extends('myLayouts.dashboard')
@section('content')

<div class="container-fluid">
    @if (Session::has('success'))
        <p class="alert alert-success mt-1 mb-1">{{session('success')}}</p>
    @endif
    <div class="card shadow my-5">
        <div class="card-header py-3 d-flex align-items-center justify-content-between">
            <h6 class="m-0 fw-bold">Update {{$data->title}}</h6>
            <a href="{{url('myLayouts/roomType')}}" class="text-decoration-none btn btn-success">View All</a>
        </div>

        <div class="card-body">
            <form method="post" action="{{url ('myLayouts/roomType/'. $data->id)}}" enctype="multipart/form-data">
                @csrf
                @method('put')
                <input type="hidden" name="id" id="id" value="{{$data->id}}">
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{$data->title}}">
                    <div class="titleError"></div>
                </div>
                <div class="mb-3">
                    <label for="detail" class="form-label">Detail</label>
                    <textarea class="form-control" id="detail" name="detail" rows="5">{{$data->detail}}</textarea>
                    <div class="detailError"></div>
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Price</label>
                    <input type="number" class="form-control" id="price" name="price" value="{{$data->price}}">
                    <div class="priceError"></div>
                </div>

                <div class="mb-3">
                    <label for="amenities">Amenities:</label>
                    <select multiple class="form-control" name="amenities[]">
                        @foreach($amenities as $a)
                            <option value="{{ $a->id }}" @if($data->amenities->where('id', $a->id)->isNotEmpty()) selected @endif>{{ $a->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label for="beds">Beds:</label>
                    <select multiple class="form-control" name="beds[]">
                        @foreach($beds as $bed)
                            <option value="{{ $bed->id }}" @if($data->beds->where('id', $bed->id)->isNotEmpty()) selected @endif>{{ $bed->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="complements">Complements:</label>
                    <select multiple class="form-control" name="complements[]">
                        @foreach($complements as $complement)
                            <option value="{{ $complement->id }}" @if($data->complements->where('id', $complement->id)->isNotEmpty()) selected @endif>{{ $complement->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="adults" class="form-label">Adults</label>
                    <input type="number" class="form-control" id="adults" name="adults" value="{{$data->adults}}">
                    @error('adults')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="children" class="form-label">Children</label>
                    <input type="number" class="form-control" id="children" name="children" value="{{$data->children}}">
                    @error('children')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="image" class="form-label">Cover</label>
                    <input type="file" class="form-control" id="image" name="image_path" value="{{$data->image_path}}">
                    <div class="imageError"></div>
                </div>


                <div class="mb-3">
                    <label for="images" class="form-label">Gallery Images</label>
                    <input type="file" multiple name="images[]" class="form-control" id="images">
                    <div class="d-flex flex-wrap justify-content-around align-items-center mt-4">
                            @foreach($data->roomTypeImgs as $img)
                                <div class="imgcol{{$img->id}} ">
                                    <img src="{{asset($img->image)}}" alt="" width="300px" height="200px">
                                    <p class="mt-2 text-center">
                                        <button type="button" class="btn btn-dannger btn-sm delete-image " data-image-id="{{$img->id}}" style="background-color: red;color: white;">
                                            <i class='bx bxs-trash' ></i>
                                        </button>
                                    </p>
                                </div>
                            @endforeach
                    </div>
                </div>
                <button type="submit" class="btn btn-primary my-4 mx-auto">Submit</button>
            </form>

        </div>
    </div>

</div>

    @section('scripts')
    <script type="text/javascript">
        $(document).ready(function(){
            $(".delete-image").on('click', function(){
                var _img_id= $(this).attr('data-image-id');
                var _vm = $(this);
                $.ajax({
                    url:'{{url("myLayouts/room_type_images/delete")}}/'+_img_id,
                    dataType:'json',
                    beforeSend:function(){
                        _vm.addClass('disabled');
                    },
                    success:function(res){
                        console.log(res);
                        $(".imgcol" + _img_id ).remove();
                        _vm.removeClass('disabled');
                    }
                });
            });
        });
    </script>

    @endsection

@endsection
