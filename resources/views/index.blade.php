@extends('layouts/master')
@section('title', 'Home')
@section('content')
    <div class="">
        <div class="h-screen">
            <div class="flex h-screen relative text-center mb-10 shadow-xl">
                <img id="hero_section" class="h-screen w-screen object-cover"
                     src="{{asset('assets/stock_photo_rdev/IMG_7266.jpg')}}" alt="">
                <div class="absolute bottom-0 pb-10 bg-gradient-to-t from-gray-900 to-transparent w-full text-center">
                </div>
            </div>
        </div>
        <div class="grid grid-cols-1 gap-y-10 px-10 bg-white">
            <div>
                <div class="m-auto w-[60rem] align-middle">
                    <div class="absolute text-gray-300 -translate-x-10 -translate-y-10 text-8xl">
                        <i class="fas fa-quote-right"></i>
                    </div>
                    <div class="relative my-20 text-lg">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque quis dui tempor, porta
                            justo vel, suscipit tellus. Vivamus sed lectus nec tellus fringilla fermentum vel nec lorem.
                            Nullam eros urna, rutrum ac euismod eu, ultricies sed nibh. Vivamus finibus ligula non
                            tempus consequat.<span class="mx-3 italic font-light"> - Jane Doe - </span></p>
                    </div>
                </div>
            </div>
            <div class="flex">
                <div class="w-[35rem] h-96 bg-white rounded-3xl shadow-lg shadow-neutral-500">
                    <img class="w-[35rem] h-96 rounded-3xl"
                         src="{{asset('assets/stock_photo_rdev/Pic-1.jpg')}}">
                </div>
                <div class="grid grid-cols-1 gap-5 text-start pl-10 py-10">
                    <h1 class="text-4xl font-bold">SEKOLAH KARYA</h1>
                    <p class="w-[38rem] italic">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque
                        quis dui tempor, porta justo vel, suscipit tellus. Vivamus sed lectus nec tellus fringilla
                        fermentum vel nec lorem. Nullam eros urna, rutrum ac euismod eu, ultricies sed nibh. Vivamus
                        finibus ligula non tempus consequat. Vestibulum aliquam maximus odio ac varius. Suspendisse
                        sapien lorem, fringilla ac augue eu, congue tempor magna.</p>
                </div>
            </div>
            <div class="flex">
                <div class="w-3/4 h-96 grid grid-cols-6 grid-rows-6 gap-10">
                    <content-card-component imagecontent="{{asset('assets/stock_photo_rdev/Pic-1.jpg')}}" insight="60"></content-card-component>
                    <content-card-component imagecontent="{{asset('assets/stock_photo_rdev/Pic-1.jpg')}}" insight="40"></content-card-component>
                    <content-card-component imagecontent="{{asset('assets/stock_photo_rdev/Pic-1.jpg')}}" insight="30"></content-card-component>
{{--                    <content-card-component imagecontent="{{asset('assets/stock_photo_rdev/Pic-1.jpg')}}" insight="40"></content-card-component>--}}
{{--                    <content-card-component imagecontent="{{asset('assets/stock_photo_rdev/Pic-1.jpg')}}" insight="20"></content-card-component>--}}
{{--                    <content-card-component imagecontent="{{asset('assets/stock_photo_rdev/Pic-1.jpg')}}" insight="10"></content-card-component>--}}
{{--                    <content-card-component imagecontent="{{asset('assets/stock_photo_rdev/Pic-1.jpg')}}" insight="50"></content-card-component>--}}
                </div>
                <div>
                    <h1 class="text-4xl font-bold uppercase">Prestasi Kami</h1>
                </div>
            </div>
        </div>
    </div>
@endsection
