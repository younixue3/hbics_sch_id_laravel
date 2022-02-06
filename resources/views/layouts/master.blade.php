<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Inputter Atlet</title>
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <script src="https://kit.fontawesome.com/6fd3995802.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <div id="app">
{{--            <example-component></example-component>--}}
{{--            <nav-bar-component></nav-bar-component>--}}
            @include('layouts/header')
            @yield('content')
            @include('layouts/footer')
        </div>
    <script src="{{asset('js/app.js')}}"></script>
    </body>
</html>
