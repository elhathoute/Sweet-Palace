@extends('layouts.app')
@section('content')


{{-- <form id="formAccountSettings" method="POST" action="{{ route('users.updateRole') }}">
    @csrf --}}
    {{-- @method('put') --}}
    {{-- <div class="container">
        <div class="row">
            <div class="mb-3 col-md-6">
                <label for="name" class="form-label">Name</label>
                <input class="form-control" type="text" id="name" name="name" value="{{ $user->name }}" disabled>
            </div>
            <div class="mb-3 col-md-6">
                <label for="email" class="form-label">Email Address</label>
                <input class="form-control" type="email" id="email" name="email" value="{{$user->email }}" disabled>
            </div>
            <div class="mb-3 col-md-6">
                <label for="mobile" class="form-label">Mobile</label>
                <input class="form-control" type="text" id="mobile" name="mobile" value="{{$user->mobile }}" disabled>
            </div>
            <div class="mb-3 col-md-6">
                <label for="address" class="form-label">Address</label>
                <input class="form-control" type="text" id="address" name="address" value="{{ $user->address }}"disabled>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="radio" name="role" id="admin_{{ $user->id }}" value="1" {{ $user->role == 1 ? 'checked' : '' }}>
                <label class="form-check-label" for="admin_{{ $user->id }}">
                    Admin
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="role" id="customer_{{ $user->id }}" value="0" {{ $user->role == 0 ? 'checked' : '' }}>
                <label class="form-check-label" for="customer_{{ $user->id }}">
                    Customer
                </label>
            </div>
            @error('role')
                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
             @enderror
            <div class="mt-2 d-flex">
                <button type="submit" class="btn btn-outline-dark me-2">Save Changes</button>
                <a href="{{url('myLayouts.users')}}" class="btn btn-dark">Cancel</a>
            </div>
        </div>
    </div>
</form> --}}
<form action="{{ route('users.updateRole', $user->id) }}" method="POST">
    @csrf
    @method('POST')

    <label for="role">Rôle :</label>
    <select name="role" id="role">
        <option value="admin" {{ $user->role == 'admin' ? 'selected' : '' }}>Administrateur</option>
        <option value="customer" {{ $user->role == 'customer' ? 'selected' : '' }}>Client</option>
    </select>

    <button type="submit">Mettre à jour le rôle</button>
</form>
@endsection
