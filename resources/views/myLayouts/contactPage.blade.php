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
    <title>About</title>
    <link href="{{asset('/css/acceuil.css')}}" rel="stylesheet">
    <link href="{{asset('/css/contact.css')}}" rel="stylesheet">
</head>
<body>
    <div>
        @include('myLayouts.navbar')
    </div>
    <section class="container my-5" style="max-width: 1600px !important;">
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
                                        15205 North Kierland Blvd.
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
                                        viserhotel@gmail.com
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
                                        <a href="tel:123 - 4567890">
                                        123 - 4567890
                                        </a>
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
                <form method="post" action="" class="">
                    <div class="mb-3">
                        <label>
                            Name
                        </label>
                        <div class="custom-icon-field">
                            <input name="name" type="text" class="form--control" value="" placeholder="Enter Your Name" required="">
                            <i class="fas fa-user-alt">
                            </i>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label>
                            Email
                        </label>
                        <div class="custom-icon-field">
                            <input name="email" type="email" class="form--control" value="" placeholder="Enter Email Address" required="">
                            <i class="fas fa-envelope">
                            </i>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label>
                            Subject
                        </label>
                        <input name="subject" type="text" class="form--control" value="" placeholder="Enter Subject" required="">
                    </div>
                    <div class="mb-3">
                        <label>
                            Message
                        </label>
                        <textarea name="message" rows="4" class="form--control" placeholder="Write Message" required=""></textarea>
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
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d319472.022050908!2d-8.126814218652388!3d31.54725877580163!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xdafee8d96179e51%3A0x5950b6534f87adb8!2sMarrakech!5e0!3m2!1sfr!2sma!4v1681567254577!5m2!1sfr!2sma" 
             style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
