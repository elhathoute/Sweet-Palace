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
            <h6 class="m-0 fw-bold">Departments</h6>
            <a href="{{url('myLayouts/departements/create')}}" class="text-decoration-none btn btn-success">Add New Department</a>
        </div>
        <div class="card-body">
            <table id="example" class="display table table-responsive" style="width:100%">
                <thead class="table-dark">
                    <tr>
                        <th class="text-center">Id</th>
                        <th class="text-center">Title</th>
                        <th class="text-center">Detail</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    {{-- @if($rooms) --}}
                        {{-- @foreach ($rooms as $r ) --}}
                            <tr>
                                <td></td>
                                <td class="text-truncate" style="max-width: 30px"></td>
                                <td value=""></td>
                                <td class="d-flex justify-content-center">
                                    <a href="{{url('myLayouts/departements/')}}" class="btn btn-sm me-3" style="color: white; background-color:#070A52;"><i class='bx bxs-show'></i></a>
                                    <a href="{{url('myLayouts/departements/edit')}}" class="btn btn-success btn-sm me-3"><i class='bx bxs-edit' ></i></a>
                                    <form action="{{ url('myLayouts/departements'. '/')}}" method="POST">
                                        @csrf
                                        @method("DELETE")
                                        <button onclick="return confirm('Are you sure to delete thi Room Type ?')" class="btn btn-danger btn-sm me-3"><i class='bx bxs-trash' ></i></button>
                                    </form>
                                </td>
                            </tr>
                        {{-- @endforeach --}}
                    {{-- @endif --}}
                </tbody>
                <tfoot>
                    <tr>
                        <th class="text-center">Id</th>
                        <th class="text-center">Title</th>
                        <th class="text-center">Detail</th>
                        <th class="text-center">Action</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>

</div>

@endsection
