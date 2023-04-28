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
        {{-- @dd($gallery) --}}
      
        <div class="row">
              @foreach ($gallery as $g)
            <div class=" d-flex justify-content-between gap-2 col-md-4 col-sm-12 column">
                <img src="{{asset($g->pictures)}}" class="img-fluid" />
            </div>
        @endforeach
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
