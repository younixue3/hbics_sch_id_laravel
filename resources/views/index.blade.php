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
        <div class="grid grid-cols-1">
            <div>
                <div class="m-auto w-[60rem] align-middle">
                    <div class="absolute text-gray-300 -translate-x-10 -translate-y-10 text-8xl">
                        <i class="fas fa-quote-right"></i>
                    </div>
                    <div class="relative my-20 z-10 text-lg">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque quis dui tempor, porta justo vel, suscipit tellus. Vivamus sed lectus nec tellus fringilla fermentum vel nec lorem. Nullam eros urna, rutrum ac euismod eu, ultricies sed nibh. Vivamus finibus ligula non tempus consequat.<span class="mx-3 italic font-light"> - Jane Doe - </span></p>
                    </div>
                </div>
            </div>
            <div>

            </div>
        </div>
    </div>
@endsection
