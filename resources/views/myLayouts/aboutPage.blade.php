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
    <link href="{{asset('/css/about.css')}}" rel="stylesheet">
</head>
<body>
    <div>
        @include('myLayouts.navbar')
    </div>
    <section class="section">
        <div class="container" style="max-width: 1600px !important;">
          <div class="row gy-4 justify-content-between">
            <div class="col-xl-5 col-lg-6">
              <div class="about-thumb-wrapper">
                <div class="about-thumb">
                  <img src="https://script.viserlab.com/viserhotel/assets/images/frontend/about/6296091c727e21653999900.jpg" alt="image">
                </div>
                <div class="about-thumb">
                  <img src="https://script.viserlab.com/viserhotel/assets/images/frontend/about/6296091d240461653999901.jpg" alt="image">
                </div>
                <div class="about-thumb">
                  <img src="https://script.viserlab.com/viserhotel/assets/images/frontend/about/6296091d9fd3c1653999901.jpg" alt="image">
                </div>
                <div class="about-thumb">
                  <img src="https://script.viserlab.com/viserhotel/assets/images/frontend/about/6296091e478d11653999902.jpg" alt="image">
                </div>
              </div>
            </div>
            <div class="col-xl-6 col-lg-6">
              <div class="section-header mb-xl-4 mb-3">
                <h2 class="sec-title">
                  Welcome and Relax at Our Hotel
                </h2>
                <p>
                    Our hotel was founded with a simple vision: to provide our guests with an unforgettable stay experience. 
                    We are committed to delivering exceptional service, superior quality, and attention to detail that will make 
                    you feel at home.
                </p>
              </div>
             
              <div>
                <p>
                    Our team is made up of dedicated and passionate professionals, 
                    ready to cater to all your needs and make your stay a unique and memorable experience.
                </p>
                <p>
                    We offer a variety of elegantly decorated rooms and suites to cater to all needs and budgets. 
                    All our rooms are equipped with modern comforts including air conditioning, cable TV, minibar, safe, and free Wi-Fi.
                </p>
                <p>
                    We are located in a prime location, close to many local attractions and popular destinations. 
                    Whether you're here for business or pleasure, our location is ideal for all your needs.
                </p>
                <p>
                    We hope you enjoy your stay in our hotel and come back to visit us soon. 
                    If you have any questions or concerns, please feel free to contact us at any time.
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>
       
    <div>
        @include('myLayouts.footer')
    </div>
</body>
{{-- links bootstrap  start--}}
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
{{-- links bootstrap  end--}}
{{-- JS --}}
<script src="/js/main.js"></script>
</html>

  