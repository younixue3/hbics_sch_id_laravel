@extends('layouts.front.master')
@section('title', 'Orang Tua')
@section('content')
    <div>
        <hero-alumni-component url_req="{{route('api.getHeroOrangTua')}}"></hero-alumni-component>
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
                <testimoni-component get_req="{{route('api.getTestimoni')}}"></testimoni-component>
            </div>
        </div>
    </div>
@endsection
