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
            <h6 class="m-0 fw-bold">Users</h6>
            <a href="{{url('myLayouts/users/create')}}" class="text-decoration-none btn btn-success">Add New User</a>
        </div>
        <div class="card-body">
            <table id="example" class="display table table-responsive" style="width:100%">
                <thead class="table-dark">
                    <tr>
                        <th class="text-center">Id</th>
                        <th class="text-center">Name</th>
                        <th class="text-center">Email</th>
                        <th class="text-center">Mobile</th>
                        <th class="text-center">Address</th>
                        <th class="text-center">Role</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @if($users)
                        @foreach ($users as $user)
                            <tr>
                                <td>{{$user->id}}</td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->mobile}}</td>
                                <td>{{$user->address}}</td>
                                <td>
                                    @if($user->role == 1)
                                        <span class="py-1 px-2" style="background-color: #16FF00;">Admin</span>
                                    @else
                                        <span class="py-1 px-2" style="background-color: #FFEA20;">Client</span>
                                    @endif
                                </td>

                                <td class="d-flex justify-content-center">
                                    <a href="{{url('myLayouts/users/'.$user->id)}}" class="btn btn-sm me-3" style="color: white; background-color:#070A52;"><i class='bx bxs-show'></i></a>
                                    <a href="{{url('myLayouts/users/'.$user->id.'/edit')}}" class="btn btn-success btn-sm me-3"><i class='bx bxs-edit' ></i></a>
                                    <form action="{{ url('myLayouts/users'. '/'.$user->id)}}" method="POST">
                                        @csrf
                                        @method("DELETE")
                                        <button onclick="return confirm('Are you Sure to Delete this User ?');"class="btn btn-danger btn-sm me-3"><i class='bx bxs-trash' ></i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    @endif
                </tbody>
                <tfoot>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Mobile</th>
                        <th>Address</th>
                        <th>Role</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>

</div>

@endsection
