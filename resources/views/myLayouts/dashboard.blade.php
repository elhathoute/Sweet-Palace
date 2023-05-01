<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">

    <title>Dashboard</title>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="{{asset('/css/dashboard.css')}}">
</head>

<body>
    <!-- =============== Navigation ================ -->
    <div class="containerr">
        <div class="navigation">
            <ul>
                <li>
                    <a href="{{url('/myLayouts/dashboard')}}">
                        <span class="icon">
                            <i class='ion-icon bx bxs-castle'></i>
                        </span>
                        <span class="title">Sweet Palace</span>
                    </a>
                </li>

                <li>
                    <a href="{{url('/myLayouts/dashboard')}}">
                        <span class="icon">
                            <i class='ion-icon bx bxs-home-alt-2'></i>
                        </span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>

                <li class="dropdown">
                    <a href="{{url('myLayouts/roomType')}}">
                        <span class="icon">
                            <i class='ion-icon bx bxs-category' ></i>
                        </span>
                        <span class="title">Room Type</span>
                    </a>
                </li>

                <li class="dropdown">
                    <a href="{{url('myLayouts/amenities')}}">
                        <span class="icon">
                            <i class='bx bx-library ion-icon' ></i>
                        </span>
                        <span class="title">Amenities</span>
                    </a>
                </li>

                <li class="dropdown">
                    <a href="{{url('myLayouts/beds')}}">
                        <span class="icon">
                            <i class='bx bxs-bed ion-icon'></i>
                        </span>
                        <span class="title">Beds</span>
                    </a>
                </li>

                <li class="dropdown">
                    <a href="{{url('myLayouts/complements')}}">
                        <span class="icon">
                            <i class='bx bxs-donate-heart ion-icon' ></i>
                        </span>
                        <span class="title">Complements</span>
                    </a>
                </li>

                <li>
                    <a href="{{url('myLayouts/rooms')}}">
                        <span class="icon">
                            <i class='ion-icon bx bx-registered' ></i>
                        </span>
                        <span class="title">Room</span>
                    </a>
                </li>

                <li>
                    <a href="{{url('myLayouts/users')}}">
                        <span class="icon">
                            <i class='bx bxs-user-pin ion-icon'></i>
                        </span>
                        <span class="title">Users</span>
                    </a>
                </li>

                <li>
                    <a href="{{url('myLayouts/departements')}}">
                        <span class="icon">
                            <i class='ion-icon bx bx-buildings' ></i>
                        </span>
                        <span class="title">Departments</span>
                    </a>
                </li>
                <li>
                    <a href="{{url('myLayouts/staff')}}">
                        <span class="icon">
                            <i class='ion-icon bx bxs-user-detail'></i>
                        </span>
                        <span class="title">Staff</span>
                    </a>
                </li>
                <li>
                    <a href="{{url('myLayouts/booking')}}">
                        <span class="icon">
                            <i class='ion-icon bx bx-bookmark-alt'></i>
                        </span>
                        <span class="title">Booking</span>
                    </a>
                </li>
                <li>
                    <a href="{{url('myLayouts/services')}}">
                        <span class="icon">
                            <i class='bx bx-cog ion-icon'></i>
                        </span>
                        <span class="title">Services</span>
                    </a>
                </li>
                <li>
                    <a href="{{url('myLayouts/gallery')}}">
                        <span class="icon">
                            <i class='bx bx-images ion-icon'></i>
                        </span>
                        <span class="title">Gallery</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        <span class="icon">
                            <i class='ion-icon bx bx-log-out'></i>
                        </span>
                        <span class="title">Sign Out</span>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>
            </ul>
        </div>

        <!-- ========================= Main ==================== -->
        <div class="main">
            <div class="topbar">
                <div class="toggle">
                    <i class='ion-icon bx bx-menu' ></i>
                </div>


                <div class=" d-flex align-items-center justify-content-center">
                    <i class='ion-icon bx bxs-user me-2 fs-5'></i> <p class="mt-3 fs-5 me-3">{{ Auth::user()->name }}</p>
                </div>
            </div>

            <div>
                @include('myLayouts.statistics')
            </div>

            <div>
                @yield('content')
            </div>

        </div>
    </div>
    <!------------- dataTable------------>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function () { $('#example').DataTable(); });

    </script>

    <!-- =========== Scripts =========  -->
    <script src="{{asset('/js/dash.js')}}"></script>
    @yield('scripts')
    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>
