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
            <h6 class="m-0 fw-bold">Admins</h6>
            <a href="{{url('myLayouts/admins/create')}}" class="text-decoration-none btn btn-success">Add New Admin</a>
        </div>
        <div class="card-body">
            <table id="example" class="display table table-responsive" style="width:100%">
                <thead class="table-dark">
                    <tr>
                        <th class="text-center">Id</th>
                        <th class="text-center">Picture</th>
                        <th class="text-center">Firstname</th>
                        <th class="text-center">Lastname</th>
                        <th class="text-center">Email</th>
                        <th class="text-center">Mobile</th>
                        <th class="text-center">Address</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @if($admins)
                        @foreach ($admins as $a)
                            <tr>
                                <td>{{$a->id}}</td>
                                <td><img style="width: 30px; height:30px; border-radius:100%;" src="{{asset($a->picture)}}" alt=""></td>
                                <td>{{$a->firstname}}</td>
                                <td>{{$a->lastname}}</td>
                                <td>{{$a->email}}</td>
                                <td>{{$a->mobile}}</td>
                                <td>{{$a->address}}</td>

                                <td class="d-flex justify-content-center">
                                    <a href="{{url('myLayouts/admins/'.$a->id)}}" class="btn btn-sm me-3" style="color: white; background-color:#070A52;"><i class='bx bxs-show'></i></a>
                                    <a href="{{url('myLayouts/admins/'.$a->id.'/edit')}}" class="btn btn-success btn-sm me-3"><i class='bx bxs-edit' ></i></a>
                                    <form action="{{ url('myLayouts/admins'. '/'.$a->id)}}" method="POST">
                                        @csrf
                                        @method("DELETE")
                                        <button onclick="return confirm('Are you Sure to Delete this Admin ?');"class="btn btn-danger btn-sm me-3"><i class='bx bxs-trash' ></i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    @endif
                </tbody>
                <tfoot>
                    <tr>
                        <th>Id</th>
                        <th>Picture</th>
                        <th>Firstname</th>
                        <th>Lasttname</th>
                        <th>Email</th>
                        <th>Mobile</th>
                        <th>Address</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>

</div>

@endsection
