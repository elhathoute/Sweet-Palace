@extends('layouts.app')

@section('content')
<div class="container"  style="max-width: 1600px !important;">
    {{-- <div class="row text-center">
        <p>Welcome to our online booking system</p>
        <p>We hope you find it easy to use and look forward to welcoming you in person.</p>
    </div> --}}
    <div class="row justify-content-around registration my-4" style="background-color:#fff; border-radius:15px;">
        <div class="col-md-7 ps-0" >
            <img src="{{asset('/images/register8.jpg')}}" class="w-100 h-100 img-fluid" alt="" style="object-position: center; object-fit: cover;  border-radius:15px;">
        </div>
        <div class="col-md-5  my-auto">
            <div class="card border-0 py-3">
                <div class="card-body">
                    <div class="card-title">
                        <h3 class="text-center capital-title">Create your Account</h3>
                        <p class="text-center sous-title mt-3">Please provide the following informations to sign up for our hotel</p>
                    </div>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-12 col-form-label fw-bold fs-5">{{ __('Name') }}</label>

                            <div class="col-md-12 user-input">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name">
                                <i class='bx bxs-user'></i>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-12 col-form-label fw-bold fs-5">{{ __('Email Address') }}</label>

                            <div class="col-md-12 user-input">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                <i class='bx bxs-envelope' ></i>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="mobile" class="col-md-12 col-form-label fw-bold fs-5">{{ __('Mobile Number') }}</label>

                            <div class="col-md-12 user-input">
                                <input id="mobile" type="text" class="form-control @error('mobile') is-invalid @enderror" name="mobile" value="{{ old('mobile') }}" required autocomplete="mobile">
                                <i class='bx bxs-phone' ></i>
                                @error('mobile')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="address" class="col-md-12 col-form-label fw-bold fs-5">{{ __('Address') }}</label>

                            <div class="col-md-12 user-input">
                                <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" required autocomplete="address">
                                <i class='bx bxs-map' ></i>
                                @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-12 col-form-label fw-bold fs-5">{{ __('Password') }}</label>

                            <div class="col-md-12 user-input">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                <i class='bx bxs-key'></i>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-12 col-form-label fw-bold fs-5">{{ __('Confirm Password') }}</label>

                            <div class="col-md-12  user-input">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                <i class='bx bxs-key'></i>
                            </div>
                        </div>

                        <div class="row ">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary w-100 py-2 fw-bold fs-5 register-btn mt-3">
                                    {{ __('Sign In') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
