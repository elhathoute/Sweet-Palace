
@extends('myLayouts.dashboard')
@section('content')
<div class="container-fluid">
    <div class="card shadow my-5">
        <div class="card-header py-3 d-flex align-items-center justify-content-between">
            <h6 class="m-0 fw-bold">Room Types</h6>
            <a href="{{url('myLayouts/roomType/create')}}" class="text-decoration-none btn btn-success">Add New RoomType</a>
        </div>
        <div class="card-body">
            <table id="example" class="display table table-responsive-lg" style="width:100%">
                <thead class="table-dark">
                    <tr>
                        <th>Id</th> 
                        <th>Title</th>
                        <th>Detail</th>
                        <th>Price</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @if($data)
                        @foreach ($data as $d)
                            <tr>
                                <td>{{$d->id}}</td>
                                <td>{{$d->title}}</td>
                                <td class="text-truncate" style="max-width: 30px"> {{$d->detail}}</td>
                                <td>{{$d->price}}</td>
                                <td>{{$d->image_path}}</td>
                                <td>
                                    <a href="{{url('myLayouts/roomType/'.$d->id)}}" class="btn btn-sm" style="color: white; background-color:#070A52;"><i class='bx bxs-show'></i></a> 
                                    <a href="{{url('myLayouts/roomType/'.$d->id.'/edit')}}" class="btn btn-success btn-sm"><i class='bx bxs-edit' ></i></a>
                                    <a href="{{url('myLayouts/roomType/'.$d->id.'/delete')}}" class="btn btn-danger btn-sm"><i class='bx bxs-trash' ></i></a>
                                    
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
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
    
</div>
    
@endsection