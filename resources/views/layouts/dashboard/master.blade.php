<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HBICS | @yield('title')</title>
    <link rel="icon" type="image/png" href="{{asset('assets/logo/logo_colorfull.png')}}">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <script src="https://kit.fontawesome.com/6fd3995802.js" crossorigin="anonymous"></script>
</head>
<body>
<div id="app" class="bg-gray-100 font-raleway">
    @include('layouts.dashboard.header')
    <div class="min-h-screen px-10 py-5">
    @yield('content')
        </div>
    </div>
</div>
    @include('layouts.dashboard.footer')
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
</style>
</body>
</html>
