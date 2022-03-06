@extends('layouts.master')
@section('title', 'Pendaftaran')
@section('content')
    <div id="hero_section" class="h-44"></div>
    <div class="h-96 bg-fixed flex" style="background-image: url('{{asset('assets/stock_photo_rdev/cambridge.jpeg')}}')">
        <div class="m-auto w-full h-full text-center text-white flex relative backdrop-brightness-75">
            <div class="m-auto">
                <h1 class="text-5xl font-bold uppercase mb-10">
                    Petunjuk Pendaftaran
                </h1>
                <a class="font-normal text-lg" href="#">Read More<i
                        class="ml-1 fa-solid fa-circle-arrow-right"></i></a>
            </div>
        </div>
    </div>
    <div class="h-96 bg-fixed flex" style="background-image: url('{{asset('assets/stock_photo_rdev/')}}')">
        <div class="m-auto w-full h-full text-center text-white flex relative backdrop-brightness-75">
            <div class="m-auto">
                <h1 class="text-5xl font-bold uppercase mb-10">
                    Program Beasiswa
                </h1>
                <a class="font-normal text-lg" href="#">Read More<i
                        class="ml-1 fa-solid fa-circle-arrow-right"></i></a>
            </div>
        </div>
    </div>
    <div class="h-96 bg-fixed flex" style="background-image: url('{{asset('assets/stock_photo_rdev/cambridge.jpeg')}}')">
        <div class="m-auto w-full h-full text-center text-white flex relative backdrop-brightness-75">
            <div class="m-auto">
                <h1 class="text-5xl font-bold uppercase mb-10">
                    Pendaftaran Siswa Baru
                </h1>
                <a class="font-normal text-lg" href="#">Read More<i
                        class="ml-1 fa-solid fa-circle-arrow-right"></i></a>
            </div>
        </div>
    </div>
    <div class="h-96 bg-fixed flex" style="background-image: url('{{asset('assets/stock_photo_rdev/cambridge.jpeg')}}')">
        <div class="m-auto w-full h-full text-center text-white flex relative backdrop-brightness-75">
            <div class="m-auto">
                <h1 class="text-5xl font-bold uppercase mb-10">
                    Kunjungi Kami
                </h1>
                <a class="font-normal text-lg" href="#">Read More<i
                        class="ml-1 fa-solid fa-circle-arrow-right"></i></a>
            </div>
        </div>
    </div>
@endsection
