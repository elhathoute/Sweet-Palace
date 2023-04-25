
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
            <h6 class="m-0 fw-bold">Beds</h6>
            <a href="{{url('myLayouts/beds/create')}}" class="text-decoration-none btn btn-success">Add New Bed</a>
        </div>
        <div class="card-body">
            <table id="example" class="display table table-responsive" style="width:100%">
                <thead class="table-dark">
                    <tr>
                        <th class="text-center">Id</th>
                        <th class="text-center">name</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @if($beds)
                        @foreach ($beds as $b)
                            <tr>
                                <td class="text-center">{{$b->id}}</td>
                                <td class="text-center">{{$b->name}}</td>
                                <td class="d-flex justify-content-center">
                                    <a href="{{url('myLayouts/beds/'.$b->id.'/edit')}}" class="btn btn-success btn-sm me-3 text-center"><i class='bx bxs-edit' ></i></a>
                                    <form action="{{ url('myLayouts/beds'. '/'.$b->id)}}" method="POST">
                                        @csrf
                                        @method("DELETE")
                                        <button onclick="return confirm('Are you sure to delete this Bed ?')" class="btn btn-danger btn-sm me-3"><i class='bx bxs-trash' ></i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    @endif
                </tbody>
                <tfoot>
                    <tr>
                        <th class="text-center">Id</th>
                        <th class="text-center">Name</th>
                        <th class="text-center">Action</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>

</div>

@endsection
