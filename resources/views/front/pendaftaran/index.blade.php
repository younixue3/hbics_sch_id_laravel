@extends('layouts.front.master')
@section('title', 'Pendaftaran')
@section('content')
    <div id="hero_section" class="h-44"></div>
    <div class="h-52 md:h-96 bg-fixed bg-no-repeat bg-cover flex bg-center"
         style="background-image: url('{{asset('assets/stock_photo_rdev/cambridge.webp')}}')">
        <div class="m-auto w-full h-full text-center text-white flex relative backdrop-brightness-75">
            <a href="{{route('petunjuk-pendaftaran')}}">
                <div class="m-auto bg-black bg-opacity-25 rounded-xl p-5">
                    <h1 class="text-2xl md:text-5xl font-bold uppercase">
                        Petunjuk Pendaftaran
                    </h1>
                    <p class="my-5">
                        Panduan mendaftar Sekolah Harapan Bangsa & Happy Holy Kids
                    </p>
                    <a class="font-normal text-lg" href="{{route('petunjuk-pendaftaran')}}">Read More<i
                            class="ml-1 fa-solid fa-circle-arrow-right"></i></a>
                </div>
            </a>
        </div>
    </div>
    <div class="h-52 md:h-96 bg-fixed bg-no-repeat bg-cover flex"
         style="background-image: url('{{asset('assets/stock_photo_rdev/IMG_0762.webp')}}')">
        <div class="m-auto w-full h-full text-center text-white flex relative backdrop-brightness-75">
            <a href="{{route('program-beasiswa')}}">
                <div class="m-auto bg-black bg-opacity-25 rounded-xl p-5">
                    <h1 class="text-2xl md:text-5xl font-bold uppercase">
                        Program Beasiswa
                    </h1>
                    <p class="my-5">
                        Berbagai program Beasiswa Sekolah Harapan Bangsa & Happy Holy Kids
                    </p>
                    <a class="font-normal text-lg" href="#">Read More<i
                            class="ml-1 fa-solid fa-circle-arrow-right"></i></a>
                </div>
            </a>
        </div>
    </div>
    <div class="h-52 md:h-96 bg-fixed bg-no-repeat bg-cover flex"
         style="background-image: url('{{asset('assets/stock_photo_rdev/siswabaru.webp')}}')">
        <div class="m-auto w-full h-full text-center text-white flex relative backdrop-brightness-75">
            <a href="{{route('kunjungi-kami')}}">
                <div class="m-auto bg-black bg-opacity-25 rounded-xl p-5">
                    <h1 class="text-2xl md:text-5xl font-bold uppercase">
                        Pendaftaran Siswa Baru
                    </h1>
                    <p class="my-5">
                        Pendaftaran Calon Siswa Sekolah harapan Bangsa
                    </p>
                    <a class="font-normal text-lg" href="#">Read More<i
                            class="ml-1 fa-solid fa-circle-arrow-right"></i></a>
                </div>
            </a>
        </div>
    </div>
    <div class="h-52 md:h-96 bg-fixed bg-no-repeat bg-cover flex"
         style="background-image: url('{{asset('assets/stock_photo_rdev/IMG_2114.webp')}}')">
        <div class="m-auto w-full h-full text-center text-white flex relative backdrop-brightness-75">
            <a href="{{route('kunjungi-kami')}}">
                <div class="m-auto bg-black bg-opacity-25 rounded-xl p-5">
                    <h1 class="text-2xl md:text-5xl font-bold uppercase">
                        Kunjungi Kami
                    </h1>
                    <p class="my-5">
                        Alamat dan jadwal kunjungan ke Sekolah Harapan Bangsa
                    </p>
                    <a class="font-normal text-lg" href="#">Read More<i
                            class="ml-1 fa-solid fa-circle-arrow-right"></i>
                    </a>
                </div>
            </a>
        </div>
    </div>
@endsection
