<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HBICS | @yield('title')</title>
    <link rel="icon" type="image/png" href="{{asset('assets/logo/logo_colorfull.png')}}">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <script src="https://kit.fontawesome.com/6fd3995802.js" crossorigin="anonymous"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
<div id="app" class="bg-gray-100 font-raleway">
    @include('layouts.front.header')
    @yield('content')
    @include('layouts.front.footer')
</div>
<script src="{{asset('js/app.js')}}"></script>
<style>
    /* Hide scrollbar for Chrome, Safari and Opera */
    .removescrollbar::-webkit-scrollbar {
        display: none;
    }

    /* Hide scrollbar for IE, Edge and Firefox */
    .removescrollbar {
        -ms-overflow-style: none; /* IE and Edge */
        scrollbar-width: none; /* Firefox */
    }

    .bg-pattern {
        background-image: url({{asset('assets/svg/3.svg')}});
    }

    .bg-akademis {
        background-image: url({{asset('assets/svg/4.svg')}});
    }
</style>
</body>
</html>
