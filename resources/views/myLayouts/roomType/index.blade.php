
@extends('myLayouts.dashboard')
@section('content')
<div class="container-fluid">
    @if (Session::has('success'))
        <p class="alert alert-success mt-1 mb-1">{{session('success')}}</p>
    @endif
    @if (Session::has('success1'))
        <p class="alert alert-danger mt-1 mb-1">{{session('success1')}}</p>
    @endif

    <div class="card shadow my-5">
        <div class="card-header py-3 d-flex align-items-center justify-content-between">
            <h6 class="m-0 fw-bold">Room Types</h6>
            <a href="{{url('myLayouts/roomType/create')}}" class="text-decoration-none btn btn-success">Add New RoomType</a>
        </div>
        <div class="card-body">
            <table id="example" class="display table table-responsive" style="width:100%">
                <thead class="table-dark">
                    <tr>
                        <th class="text-center">Id</th>
                        <th class="text-center">Title</th>
                        <th class="text-center">Detail</th>
                        <th class="text-center">Price</th>
                        <th class="text-center">Cover</th>
                        <th class="text-center">Gallery Images</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @if($data)
                        @foreach ($data as $d)
                            <tr>
                                <td>{{$d->id}}</td>
                                <td class="text-truncate" style="max-width: 30px">{{$d->title}}</td>
                                <td class="text-truncate" style="max-width: 30px"> {{$d->detail}}</td>
                                <td>{{$d->price}}</td>
                                <td class="img-fluid" style="max-width: 30px"><img style="width: 30px; height:30px;" src="{{asset($d->image_path)}}" alt=""></td>
                                <td  style="width:180px">{{count($d->roomTypeImgs)}}</td>
                                <td class="d-flex justify-content-center">
                                    <a href="{{url('myLayouts/roomType/'.$d->id)}}" class="btn btn-sm me-3" style="color: white; background-color:#070A52;"><i class='bx bxs-show'></i></a>
                                    <a href="{{url('myLayouts/roomType/'.$d->id.'/edit')}}" class="btn btn-success btn-sm me-3"><i class='bx bxs-edit' ></i></a>
                                    <form action="{{ url('myLayouts/roomType'. '/'.$d->id)}}" method="POST">
                                        @csrf
                                        @method("DELETE")
                                        <button onclick="return confirm('Are you sure to delete this Room Type ?')" class="btn btn-danger btn-sm me-3"><i class='bx bxs-trash' ></i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    @endif
                </tbody>
                <tfoot>
                    <tr>
                        <th>Id</th>
                        <th>Title</th>
                        <th>Detail</th>
                        <th>Price</th>
                        <th>Cover</th>
                        <th>Gallery Images</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>

</div>

@endsection
