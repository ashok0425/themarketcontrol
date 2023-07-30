<!DOCTYPE html>
<html lang="en">
@php
    $setting = App\Models\Website::first();
@endphp

    @section('title')
        {{ $setting->title }}
    @endsection
    @section('descr')
        {{ $setting->descr }}
    @endsection
    @section('keyword')
        {{ $setting->title }}
    @endsection
    @section('img')
    {{ getImage($setting->image) }}
@endsection
@section('url')
    {{ Request::url() }}
@endsection
@section('fev')
    {{ getImage($setting->fev) }}
@endsection
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$setting->meta_title}}</title>


    <meta property="fb:app_id" content="160443599540603" />
    <meta property="og:url" content="@yield('url')" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="@yield('title')" />
    <meta property="og:description" content="@yield('descr')" />
    <meta property="og:image" content="@yield('img')" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="keyword" content="@yield('keyword')">
    <meta name="description" content="@yield('descr')">
    <link rel="stylesheet" href="css/splide.min.css">
    <link rel="stylesheet" href="css/splide-core.min.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Source+Serif+4:wght@200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
        integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&family=Ubuntu:wght@300;400;500;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{asset('frontend/css/aos.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/main.css')}}">
    <style>
        ul li{
            list-style: none;
        }
    </style>
</head>

<body>

    @include('frontend.layout.header')
    @include('frontend.home.partial.search')

    {{-- main content  --}}
    @yield('content')

    @include('frontend.layout.footer')

    <script src="{{asset('frontend/js/splide.min.js')}}"></script>
    <script src="{{asset('frontend/js/aos.js')}}"></script>
    <script src="{{asset('frontend/js/bootstrap.bundle.js')}}"></script>
    <script src="{{asset('frontend/js/main.js')}}"></script>
</body>

</html>
