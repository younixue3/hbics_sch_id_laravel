@extends('layouts.front.master')
@section('title', 'Orang Tua')
@section('content')
    <div>
        <hero-alumni-component url_req="{{route('api.getHeroOrangTua')}}"></hero-alumni-component>
        <div class="bg-pattern">
            <div class="bg-gray-300">
                <div class="grid grid-cols-2 grid-rows-2">
                    <div class="flex h-60 w-full bg-center bg-cover" style="background-image: url({{asset('assets/stock_photo_rdev/IMG_7218.jpg')}})">
                        <div class="flex bg-black bg-opacity-30 w-full h-full">
                            <div class="m-auto text-center">
                                <span class="text-4xl text-white font-bold font-raleway uppercase">
                                    Testimony
                                </span>
                                <div>
                                    <a href="#" class="text-white text-sm mt-3">
                                        Read More
                                        <i class="fa-solid fa-circle-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex h-full row-span-2 w-full bg-center bg-cover" style="background-image: url({{asset('assets/stock_photo_rdev/family-counseling-session-home-with-therapist-pshycologist-showing-pictures-emotions-girl-african-american-father-european-mother.jpg')}})">
                        <div class="flex bg-black bg-opacity-30 w-full h-full">
                            <div class="m-auto text-center">
                                <span class="text-4xl text-white font-bold font-raleway uppercase">
                                    Parents Meeting
                                </span>
                                <div>
                                    <a href="#" class="text-white text-sm mt-3">
                                        Read More
                                        <i class="fa-solid fa-circle-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex h-60 w-full bg-center bg-cover" style="background-image: url({{asset('assets/stock_photo_rdev/medium-shot-woman-talking-business.jpg')}})">
                        <div class="flex bg-black bg-opacity-30 w-full h-full">
                            <div class="m-auto text-center">
                                <span class="text-4xl text-white font-bold font-raleway uppercase">
                                    Fasilitas Orang Tua
                                </span>
                                <div>
                                    <a href="#" class="text-white text-sm mt-3">
                                        Read More
                                        <i class="fa-solid fa-circle-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="my-10 md:my-20 md:px-20">
                <div class="z-10">
                    <div
                        class="w-full h-full lg:h-[35rem] grid grid-cols-1 md:grid-cols-4 md:grid-rows-2 gap-5 lg:gap-8 overflow-hidden px-5 md:px-0 z-10">
                        @php
                            $urut = 3;
                        @endphp
                        @forelse($content as $key => $value)
                            <content-card-component insight="{{ --$urut }}"
                                                    item="{{$value}}"
                                                    author="{{$value->users_create()->user()}}"
                                                    author_pic="{{$value->users_create()->user()->foto_profile()->img}}"
                                                    urlshow="{{route('publikasi.show', $value->randKey)}}"></content-card-component>
                        @empty
                            Data kosong
                        @endforelse
                    </div>
                </div>
            </div>
            <div class="p-2 md:p-10">
                <testimoni-component get_req="{{route('api.getTestimoni')}}"></testimoni-component>
            </div>
        </div>
    </div>
@endsection
