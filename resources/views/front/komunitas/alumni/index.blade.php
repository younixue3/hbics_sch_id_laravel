@extends('layouts.front.master')
@section('title', 'Alumni')
@section('content')
    <div>
        <hero-alumni-component url_req="{{route('api.getHeroAlumni')}}"></hero-alumni-component>
        <div class="bg-pattern">
            <div class="p-5 md:p-20">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
                    <div
                        class="bg-white rounded-3xl overflow-hidden transform hover:scale-105 transition-all ease-in-out duration-500">
                        <iframe class="w-full h-96" src="https://www.youtube.com/embed/__SIn1-nuUo"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                    </div>
                    <div
                        class="bg-white rounded-3xl overflow-hidden transform hover:scale-105 transition-all ease-in-out duration-500">
                        <iframe class="w-full h-96" src="https://www.youtube.com/embed/__SIn1-nuUo"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                    </div>
                </div>
            </div>
            <div class="p-2 md:p-10">
                <div class="bg-white rounded-3xl p-1 md:p-5">
                    <div class="hidden md:grid grid-cols-5">
                        @forelse($alumni as $key => $value)
                            <div
                                class="flex p-1 md:p-3 rounded-3xl hover:bg-gray-100 transition-all ease-in-out duration-500">
                                <div class="w-1/3 flex">
                                    <img class="h-10 md:h-20 w-10 md:w-20 rounded-full object-cover m-auto"
                                         src="{{asset('Upload/foto_komunitas/'.$value->picture)}}">
                                </div>
                                <div class="w-2/3 pl-1 md:pl-3 flex">
                                    <div class="m-auto">
                                    <span class="inline-block text-sm md:text-base font-semibold">
                                        {{ $value->name }}
                                    </span>
                                        <span
                                            class="inline-block text-xs font-light">{{ $value->status }}</span>
                                    </div>
                                </div>
                            </div>
                        @empty
                            Data Kosong
                        @endforelse
                    </div>
                    <div class="md:hidden grid grid-cols-2">
                        @forelse($alumni as $key => $value)
                            <div
                                class="flex p-1 md:p-3 rounded-3xl hover:bg-gray-100 transition-all ease-in-out duration-500">
                                <div class="w-1/3 flex">
                                    <img class="h-10 md:h-20 w-10 md:w-20 rounded-full object-cover m-auto"
                                         src="{{asset('assets/stock_photo_rdev/JaneDoe.webp')}}">
                                </div>
                                <div class="w-2/3 pl-1 md:pl-3 flex">
                                    <div class="m-auto">
                                    <span class="inline-block text-sm md:text-base font-semibold">
                                        Jane Doe
                                    </span>
                                        <span
                                            class="inline-block text-xs font-light">Universitas Muhammadiyah Surakarta</span>
                                    </div>
                                </div>
                            </div>
                        @empty
                            Data Kosong
                        @endforelse
                    </div>
                </div>
            </div>
            <div class="my-10 md:px-20">
                <div
                    class="w-full h-full lg:h-[35rem] grid grid-cols-1 md:grid-cols-4 md:grid-rows-2 gap-5 lg:gap-8 overflow-hidden px-5 md:px-0 z-10">
                    @forelse($content as $key => $value)
                        <content-card-component insight="{{++$key}}"
                                                item="{{$value}}"
                                                author="{{$value->users_create()->user()}}"
                                                author_pic="{{$value->users_create()->user()->foto_profile()->img}}"></content-card-component>
                    @empty
                        Data kosong
                    @endforelse
                </div>
            </div>
        </div>
    </div>
@endsection
