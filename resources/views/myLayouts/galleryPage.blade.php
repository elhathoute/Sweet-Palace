<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Gallery</title>
    <link href="{{asset('/css/acceuil.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('/css/gallery.css')}}">
    <link href="{{asset('/css/acceuil.css')}}" rel="stylesheet">
</head>

<body>
    <div>
        @include('myLayouts.navbar')
    </div>
    <div class="container my-5" style="max-width: 1600px !important;">
        <div class="section-head col-sm-12">
            <h3><span>Our </span> Galllery</h3>
            <p>Discover our gallery for a visual preview of our hotel and its world-class amenities.</p>
        </div>
        <div class="row">
            <div class="col-md-4 column">
                <img src="https://images.pexels.com/photos/3586966/pexels-photo-3586966.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" class="img-fluid" />
                <img src="https://images.pexels.com/photos/2419375/pexels-photo-2419375.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" class="img-fluid" />
                <img src="https://images.pexels.com/photos/2326290/pexels-photo-2326290.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" class="img-fluid" />
                <img src="https://images.pexels.com/photos/3251006/pexels-photo-3251006.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" class="img-fluid" />
                <img src="https://images.pexels.com/photos/1980720/pexels-photo-1980720.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" class="img-fluid" />
            </div>
            <div class="col-md-4 column">
                <img src="https://images.pexels.com/photos/3546429/pexels-photo-3546429.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" class="img-fluid">
                <img src="https://images.pexels.com/photos/3889868/pexels-photo-3889868.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" class="img-fluid">
                <img src="https://images.pexels.com/photos/2091160/pexels-photo-2091160.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" class="img-fluid">
                <img src="https://images.pexels.com/photos/2019546/pexels-photo-2019546.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" class="img-fluid">
            </div>
            <div class="col-md-4 column">
                <img src="https://images.pexels.com/photos/3889868/pexels-photo-3889868.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" class="img-fluid" />
                <img src="https://images.pexels.com/photos/2360569/pexels-photo-2360569.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" class="img-fluid" />
            </div>
        </div>
    </div>
    <div>
        @include('myLayouts.footer')
    </div>
    {{-- links bootstrap  start--}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    {{-- links bootstrap  end--}}
</body>
</html>
