@extends('layouts.app')

@section('content')
<div class="container my-5" style="max-width: 1600px !important;">
    @if (Session::has('success'))
        <p class="alert alert-success mt-1 mb-1">{{session('success')}}</p>
    @endif
    <div class="row justify-content-around registration my-4" style="background-color:#fff; border-radius:15px;">
        <div class="col-md-7 ps-0" >
            <img src="{{asset('/images/login.jpg')}}" class="w-100 h-100 img-fluid" alt="" style="object-position: center; object-fit: cover;  border-radius:15px;">
        </div>
        <div class="col-md-5 my-auto">
            <div class="card border-0 py-3">
                <div class="card-body">
                    <div class="card-title">
                        <h3 class="text-center capital-title">Log in to your Account</h3>
                        <p class="text-center sous-title mt-3">Enter your login information to unlock access to the site's features.</p>
                    </div>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="row mb-3">
                            <label for="email" class="col-md-12 col-form-label fw-bold fs-5">{{ __('Email Address') }}</label>

                            <div class="col-md-12 user-input">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                <i class='bx bxs-envelope' ></i>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-12 col-form-label  fw-bold fs-5">{{ __('Password') }}</label>

                            <div class="col-md-12 user-input">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                <i class='bx bxs-key'></i>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-12">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label fw-semibold" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary w-100 py-2 fw-bold fs-5 register-btn mt-3">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="forget-pass btn btn-link mt-3 px-0 text-decoration-none text-black fw-semibold" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
