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
                    <a href="{{url('/dashboard')}}">
                        <span class="icon">
                            <i class='ion-icon bx bxs-castle'></i>
                        </span>
                        <span class="title">Sweet Palace</span>
                    </a>
                </li>

                <li>
                    <a href="{{url('/dashboard')}}">
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

                <li>
                    <a href="{{url('myLayouts/rooms')}}">
                        <span class="icon">
                            <i class='ion-icon bx bx-registered' ></i>
                        </span>
                        <span class="title">Room</span>
                    </a>
                </li>

                <li>
                    <a href="{{url('myLayouts/admins')}}">
                        <span class="icon">
                            <i class='ion-icon bx bx-dialpad'></i>
                        </span>
                        <span class="title">Admins</span>
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
                    <a href="#">
                        <span class="icon">
                            <i class='ion-icon bx bx-log-out'></i>
                        </span>
                        <span class="title">Sign Out</span>
                    </a>
                </li>
            </ul>
        </div>

        <!-- ========================= Main ==================== -->
        <div class="main">
            <div class="topbar">
                <div class="toggle">
                    <i class='ion-icon bx bx-menu' ></i>
                </div>

                <div class="search">
                    <label>
                        <input type="text" placeholder="Search here">
                        <i class='ion-icon bx bx-search-alt-2' ></i>
                    </label>
                </div>

                <div class="user">
                    <img src="{{asset('/images/customer01.jpg')}}" alt="">
                </div>
            </div>

            <!-- ======================= Cards ================== -->
            <div class="cardBox">
                <div class="carde">
                    <div>
                        <div class="numbers">0</div>
                        <div class="cardeName">Statistics</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="eye-outline"></ion-icon>
                    </div>
                </div>

                <div class="carde">
                    <div>
                        <div class="numbers">0</div>
                        <div class="cardeName">Statistics</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="cart-outline"></ion-icon>
                    </div>
                </div>

                <div class="carde">
                    <div>
                        <div class="numbers">0</div>
                        <div class="cardeName">Statistics</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="chatbubbles-outline"></ion-icon>
                    </div>
                </div>

                <div class="carde">
                    <div>
                        <div class="numbers">0</div>
                        <div class="cardeName">Statistics</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="cash-outline"></ion-icon>
                    </div>
                </div>
            </div>

            <div class="roomType">
                @yield('content')
             </div>
            <!-- ================ Order Details List ================= -->
            {{-- <div class="details">
                <div class="recentOrders">
                    <div class="cardeHeader">
                        <h2>Recent Orders</h2>
                        <a href="#" class="btn">View All</a>
                    </div>

                    <table>
                        <thead>
                            <tr>
                                <td>Name</td>
                                <td>Price</td>
                                <td>Payment</td>
                                <td>Status</td>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>Star Refrigerator</td>
                                <td>$1200</td>
                                <td>Paid</td>
                                <td><span class="status delivered">Delivered</span></td>
                            </tr>

                            <tr>
                                <td>Dell Laptop</td>
                                <td>$110</td>
                                <td>Due</td>
                                <td><span class="status pending">Pending</span></td>
                            </tr>

                            <tr>
                                <td>Apple Watch</td>
                                <td>$1200</td>
                                <td>Paid</td>
                                <td><span class="status return">Return</span></td>
                            </tr>

                            <tr>
                                <td>Addidas Shoes</td>
                                <td>$620</td>
                                <td>Due</td>
                                <td><span class="status inProgress">In Progress</span></td>
                            </tr>

                            <tr>
                                <td>Star Refrigerator</td>
                                <td>$1200</td>
                                <td>Paid</td>
                                <td><span class="status delivered">Delivered</span></td>
                            </tr>

                            <tr>
                                <td>Dell Laptop</td>
                                <td>$110</td>
                                <td>Due</td>
                                <td><span class="status pending">Pending</span></td>
                            </tr>

                            <tr>
                                <td>Apple Watch</td>
                                <td>$1200</td>
                                <td>Paid</td>
                                <td><span class="status return">Return</span></td>
                            </tr>

                            <tr>
                                <td>Addidas Shoes</td>
                                <td>$620</td>
                                <td>Due</td>
                                <td><span class="status inProgress">In Progress</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div> --}}

                <!-- ================= New Customers ================ -->
                {{-- <div class="recentCustomers">
                    <div class="cardHeader">
                        <h2>Recent Customers</h2>
                    </div>

                    <table>
                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="{{asset('/images/customer02.jpg')}}" alt=""></div>
                            </td>
                            <td>
                                <h4>David <br> <span>Italy</span></h4>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="{{asset('/images/customer01.jpg')}}" alt=""></div>
                            </td>
                            <td>
                                <h4>Amit <br> <span>India</span></h4>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="{{asset('/images/customer02.jpg')}}" alt=""></div>
                            </td>
                            <td>
                                <h4>David <br> <span>Italy</span></h4>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="{{asset('/images/customer01.jpg')}}" alt=""></div>
                            </td>
                            <td>
                                <h4>Amit <br> <span>India</span></h4>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="{{asset('/images/customer02.jpg')}}" alt=""></div>
                            </td>
                            <td>
                                <h4>David <br> <span>Italy</span></h4>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="{{asset('/images/customer01.jpg')}}" alt=""></div>
                            </td>
                            <td>
                                <h4>Amit <br> <span>India</span></h4>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="{{asset('/images/customer01.jpg')}}" alt=""></div>
                            </td>
                            <td>
                                <h4>David <br> <span>Italy</span></h4>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="{{asset('/images/customer02.jpg')}}" alt=""></div>
                            </td>
                            <td>
                                <h4>Amit <br> <span>India</span></h4>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div> --}}
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
