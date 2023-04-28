<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Services</title>
    <link href="{{asset('/css/acceuil.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('/css/services.css')}}">
</head>
<body>
    <div>
        @include('myLayouts.navbar')
    </div>
    <section class="pt-5 pb-5">
        <div class="container">
            <div class="row">
                
                <div class="section-head col-sm-12">
                    <h3><span>Our </span> Services</h3>
                    <p>Our hotel offers a multitude of services to meet all your needs and make your stay as enjoyable as possible. <br>We are committed to providing exceptional service and making your visit an unforgettable experience.</p>
                </div>
                @foreach ($service as $s)
                
                    <div class="col-lg-4 col-sm-6">
                        <div class="item"> <span class="icon feature_box_col_four"><img src="{{asset($s->photo_icon)}}" alt=""></span>
                            <h6 class="fw-bold " style="font-size: 18px;">{{$s->title}}</h6>
                            <p> {{$s->description}}</p>
                        </div>
                    </div>
                @endforeach
                
            </div>
        </div>
    </section>
    <div>
        @include('myLayouts.footer')
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
