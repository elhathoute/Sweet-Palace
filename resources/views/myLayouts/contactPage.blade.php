<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     {{-- links bootstrap  start--}}
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
     {{-- links bootstrap  end--}}
     {{-- Icons link --}}
     <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Contact Us</title>
    <link href="{{asset('/css/acceuil.css')}}" rel="stylesheet">
    <link href="{{asset('/css/contact.css')}}" rel="stylesheet">
</head>
<body>
    <div>
        @include('myLayouts.navbar')
    </div>
    <section class="container my-5" style="max-width: 1600px !important;">

        <div class="section-head col-sm-12 mb-5">
            <h3><span>Contact </span> Us</h3>
            <p> We are here to address any questions and concerns you may have. Contact us to learn more about our hotel and services, or to make a reservation.</p>
        </div>
        @if (Session::has('success'))
            <p class="alert alert-success mt-1 mb-1">{{session('success')}}</p>
         @endif
        <div class="contact-wrapper py-5">
            <div class="contact-wrapper-right-thumb bg_img right-bg" id="right-bg">
        </div>
        <div class="row" style="background: transparent">
            <div class="col-lg-6">
                <div class="contact-left-area bg_img left-bg" id="left-bg">
                    <div class="contact-info-wrapper">
                        <div class="contact-info-list mb-4">
                            <div class="contact-info">
                                <div class="icon">
                                    <i class='fas bx bx-map-pin'></i>
                                </div>
                                <div class="content">
                                    <h6 class="title mb-1">
                                        Office Address
                                    </h6>
                                    <p>
                                        1 Boulevard Menara, Marrakech, Morocco
                                    </p>
                                </div>
                            </div>
                            <div class="contact-info">
                                <div class="icon">
                                    <i class='fas bx bx-envelope' ></i>
                                </div>
                                <div class="content">
                                    <h6 class="title mb-1">
                                        Email Address
                                    </h6>
                                    <p>
                                        <a href="mailto:viserhotel@gmail.com">
                                        Sweet_Palace@gmail.com
                                        </a>
                                    </p>
                                </div>
                            </div>
                            <div class="contact-info">
                                <div class="icon">
                                    <i class='fas bx bxs-phone'></i>
                                </div>
                                <div class="content">
                                    <h6 class="title mb-1">
                                        Phone Number
                                    </h6>
                                    <p>
                                        <p>
                                        +212 661 65 87 23
                                        </p>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mt-lg-0 mt-4">
                <div class="contact-right-area">
                    <div class="row mb-5 mx-auto" style="background:transparent;">
                        <div class="col-lg-10">
                            <h3 class="title mb-2 text-center">
                                Get In Touch With Us
                            </h3>
                            <p class="description fs-6 text-center">
                                Our team is always happy to assist you. Contact us for any assistance you may need.
                            </p>
                        </div>
                    </div>
                <form method="post" action="{{url('save_contact_us')}}" class="">
                    @csrf

                    <div class="mb-3 position-relative">
                        <label>
                            Name
                        </label>
                        <div class="custom-icon-field">
                            <input name="full_name" type="text" class="form--control" value="" placeholder="Enter Your Name">
                            <i class='bx bxs-user fas text-dark'></i>
                        </div>
                    </div>
                    <div>
                        @error('full_name')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label>
                            Email
                        </label>
                        <div class="custom-icon-field">
                            <input name="email" type="email" class="form--control" value="" placeholder="Enter Email Address">
                            <i class='bx bxs-envelope fas text-dark' ></i>
                        </div>
                    </div>
                    <div>
                        @error('email')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label>
                            Subject
                        </label>
                        <input name="subject" type="text" class="form--control" value="" placeholder="Enter Subject">
                    </div>
                    <div>
                        @error('subject')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label>
                            Message
                        </label>
                        <textarea name="message" rows="4" class="form--control" placeholder="Write Message"></textarea>
                    </div>
                    <div>
                        @error('message')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn--base">SEND MESSAGE</button>
                </form>
            </div>
        </div>
    </div>
</section>
<section>
    <div class=" mt-5">
        <!--Google map-->
        <div id="map-container-google-1" class="z-depth-1-half map-container" style="height: 450px">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d18735.23780092819!2d-8.028005134327636!3d31.605569906812633!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xdafeee34d9c2ac9%3A0xaeddec9a066e9ae!2sAv.%20de%20la%20M%C3%A9nara%2C%20Marrakech!5e0!3m2!1sfr!2sma!4v1682240682949!5m2!1sfr!2sma"
             height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <!--Google Maps-->
    </div>
</section>

</div>
    @include('myLayouts.footer')
</div>

</body>
{{-- links bootstrap  start--}}
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
{{-- links bootstrap  end--}}
{{-- JS --}}
<script src="/js/main.js"></script>
</html>

