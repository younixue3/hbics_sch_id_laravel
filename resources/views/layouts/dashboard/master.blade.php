<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HBICS | Dashboard | @yield('title')</title>
    <link rel="icon" type="image/png" href="{{asset('assets/logo/logo_colorfull.png')}}">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <script src="https://kit.fontawesome.com/6fd3995802.js" crossorigin="anonymous"></script>
    <script src="https://cdn.tiny.cloud/1/myd6mneo80f63ct1oaplcds41f0tlhaveajnuxiiaenjdgol/tinymce/5/tinymce.min.js"
            referrerpolicy="origin"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>

<div id="app" class="bg-gray-100 font-raleway">
    <activity-component>
        <modal-show-component>
            @yield('modalShow')
        </modal-show-component>
        <modal-add-function>
            @yield('modalAdd')
        </modal-add-function>
        <modal-edit-function>
            @yield('modalEdit')
        </modal-edit-function>
        <modal-staff-change-password-function>
            @yield('modalChangePassword')
        </modal-staff-change-password-function>
        <modal-validation-function></modal-validation-function>
        <div class="flex w-full">
            @include('layouts.dashboard.header')
            <div class="min-h-screen w-full px-10 py-5">
                @yield('content')
            </div>
        </div>
        @yield('notification')
        @include('layouts.dashboard.footer')
    </activity-component>
</div>
{{--VueJs--}}
<script>

</script>
{{--VueJs--}}
<script src="{{asset('js/app.js')}}"></script>
<script>
    export default {
        mounted() {
            console.log('masok')
        }
    }
</script>
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
