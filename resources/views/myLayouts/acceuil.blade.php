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
    {{-- Swiper CSS link --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
    {{-- CSS Links--}}
    <link href="{{asset('/css/acceuil.css')}}" rel="stylesheet">

    <title>Sweet Palace</title>
</head>
<body>

    <div>
        @include('myLayouts.navbar')
    </div>

    <div>
        @include('myLayouts.banner')
    </div>

    <div>
        @include('myLayouts.about')
    </div>

    <div>
        @include('myLayouts.rooms')
    </div>

    <div>
        @include('myLayouts.services')
    </div>

    <div>
        @include('myLayouts.gallery')
    </div>

    <div>
        @include('myLayouts.booking')
    </div>


    <div>
        @include('myLayouts.footer')
    </div>

</body>
{{-- links bootstrap  start--}}
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
{{-- links bootstrap  end--}}
{{-- Swipper link --}}
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
{{-- JS --}}
<script src="/js/main.js"></script>
</html>
