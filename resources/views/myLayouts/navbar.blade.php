<nav class="navbar navbar-expand-lg" style="background-color:#001219;">
    <div class="container-fluid">
        <a class="navbar-brand text-white ms-3" href="{{ url('/') }}"><span>Sweet </span><span>Palace</span> </a>
        <button class="navbar-toggler text-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class='bx bx-menu-alt-right'></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link text-white mx-3" aria-current="page" href="{{ url('/') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white mx-3" href="{{ url('/about') }}">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white mx-3" href="{{ url('/rooms') }}">Rooms</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white mx-3" href="{{ url('/services') }}">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white mx-3" href="{{ url('/gallery') }}">Gallery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white mx-3" href="{{url('/contact')}}">Contact</a>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto">
                <!-- Authentication Links -->
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link text-white mx-3 mx-lg-0" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link text-white mx-3 mx-lg-0" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item d-flex align-items-center" href="{{route('profile')}}">
                                <i class='bx bxs-user-circle fs-5 me-2' ></i><span>Edit Profile</span>
                            </a>
                            <a class="dropdown-item d-flex align-items-center" href="{{route('change-password')}}">
                                <i class='bx bxs-key fs-5 me-2'></i><span>Change Password</span>
                            </a>
                            <hr class="dropdown-divider">
                            <a class="dropdown-item d-flex align-items-center" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                <i class='bx bx-log-out-circle fs-5 me-2'></i><span>{{ __('Logout') }}</span>
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
