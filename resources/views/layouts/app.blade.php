<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }}</title>

    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('favicon.png') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js?v='.now()->format('Y-m-d')) }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css?v='.now()->format('Y-m-d')) }}" rel="stylesheet">
</head>

<body>
    <div id="app">
        <div class="loader">
            <div class="loading-animation"></div>
        </div>
    
        @include('layouts.partials.navbar')

        @yield('content')
        
        @include('layouts.partials.footer')

        @include('layouts.partials.subscribe')

        <a href="#top" class="btn btn-primary rounded-circle btn-back-to-top" data-smooth-scroll data-aos="fade-up" data-aos-offset="2000" data-aos-mirror="true" data-aos-once="false">
            <img src="{{ asset('images/icon-arrow-up.svg') }}" alt="Icon" class="icon">
        </a>
    </div>
</body>
</html>
