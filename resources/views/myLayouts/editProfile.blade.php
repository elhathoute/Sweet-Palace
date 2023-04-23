@extends('layouts.app')
@section('content')


<form id="formAccountSettings" method="POST" action="{{ route('profile.update',auth()->id()) }}">
    @csrf
    <div class="container">
        <div class="row">
            <div class="mb-3 col-md-6">
                <label for="name" class="form-label">Name</label>
                <input class="form-control" type="text" id="name" name="name" value="{{ auth()->user()->name }}" autofocus="" required>
                <div class="invalid-tooltip">{{ trans('Name is required')}}</div>
            </div>
            <div class="mb-3 col-md-6">
                <label for="email" class="form-label">Email Address</label>
                <input class="form-control" type="email" id="email" name="email" value="{{ auth()->user()->email }}">
                <div class="invalid-tooltip">{{ trans('Email is required')}}</div>
            </div>
            <div class="mb-3 col-md-6">
                <label for="mobile" class="form-label">Mobile</label>
                <input class="form-control" type="text" id="mobile" name="mobile" value="{{ auth()->user()->mobile }}">
                <div class="invalid-tooltip">{{ trans('Mobile is required')}}</div>
            </div>
            <div class="mb-3 col-md-6">
                <label for="address" class="form-label">Address</label>
                <input class="form-control" type="text" id="address" name="address" value="{{ auth()->user()->address }}">
                <div class="invalid-tooltip">{{ trans('address is required')}}</div>
            </div>
            <div class="mt-2 d-flex">
                <button type="submit" class="btn btn-outline-dark me-2">Save Changes</button>
                <a href="{{url('myLayouts.acceuil')}}" class="btn btn-dark">Cancel</a>

                {{-- <form action="{{ route('user.delete') }}" method="post">
                    @csrf
                    @method('delete')
                        <button type="submit">Delete Profile</button>
                </form>           --}}
            </div>
        </div>
    </div>
</form>

@endsection
