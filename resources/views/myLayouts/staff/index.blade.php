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
            <h6 class="m-0 fw-bold">Staff</h6>
            <a href="{{url('myLayouts/staff/create')}}" class="text-decoration-none btn btn-success">Add New Staff</a>
        </div>
        <div class="card-body">
            <table id="example" class="display table table-responsive" style="width:100%">
                <thead class="table-dark">
                    <tr>
                        <th class="text-center">Id</th>
                        <th class="text-center">Photo</th>
                        <th class="text-center">Full Name</th>
                        <th class="text-center">Department</th>
                        <th class="text-center">Bio</th>
                        <th class="text-center">Salary Type</th>
                        <th class="text-center">Salary Amount</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @if($staff)
                        @foreach ($staff as $s )
                            <tr>
                                <td>{{$s->id}}</td>
                                <td><img style="width: 30px; height:30px; border-radius:100%;" src="{{asset($s->photo)}}" alt=""></td>
                                <td class="text-truncate" style="max-width: 30px">{{$s->full_name}}</td>
                                <td value="">{{$s->StaffDepartment->title}}</td>
                                <td class="text-truncate" style="max-width: 30px">{{$s->bio}}</td>
                                <td class="" style="">{{$s->salary_type}}</td>
                                <td class="" style="">{{$s->salary_amount}} MAD</td>
                                <td class="d-flex justify-content-center">
                                    <a href="{{url('myLayouts/staff/'.$s->id)}}" class="btn btn-sm me-3" style="color: white; background-color:#070A52;"><i class='bx bxs-show'></i></a>
                                    <a href="{{url('myLayouts/staff/'.$s->id.'/edit')}}" class="btn btn-success btn-sm me-3"><i class='bx bxs-edit' ></i></a>
                                    <form action="{{ url('myLayouts/staff'. '/'.$s->id)}}" method="POST">
                                        @csrf
                                        @method("DELETE")
                                        <button onclick="return confirm('Are you sure to delete this Staff ?')" class="btn btn-danger btn-sm me-3"><i class='bx bxs-trash' ></i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    @endif
                </tbody>
                <tfoot>
                    <tr>
                        <th class="text-center">Id</th>
                        <th class="text-center">Photo</th>
                        <th class="text-center">Full Name</th>
                        <th class="text-center">Department</th>
                        <th class="text-center">Bio</th>
                        <th class="text-center">Salary Type</th>
                        <th class="text-center">Salary Amount</th>
                        <th class="text-center">Action</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>

</div>

@endsection
