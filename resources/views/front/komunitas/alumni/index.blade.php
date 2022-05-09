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
                    <div>
                        <div class="grid grid-cols-3 md:flex text-sm md:text-base justify-center border-b border-black">
                            <a href="{{route('alumni','all')}}"
                               class="border-b-4 border-transparent focus:border-blue-600 mx-5 -mb-0.5 transition-all ease-in-out duration-500">All
                            </a>
                            <a href="{{route('alumni','hhk')}}"
                               class="border-b-4 border-transparent focus:border-blue-600 mx-5 -mb-0.5 transition-all ease-in-out duration-500">TK
                                & PG
                            </a>
                            <a href="{{route('alumni','sd')}}"
                               class="border-b-4 border-transparent focus:border-blue-600 mx-5 -mb-0.5 transition-all ease-in-out duration-500"
                               @click="changeMenu('sd')">SD
                            </a>
                            <a href="{{route('alumni','smp')}}"
                               class="border-b-4 border-transparent focus:border-blue-600 mx-5 -mb-0.5 transition-all ease-in-out duration-500">SMP
                            </a>
                            <a href="{{route('alumni','sma')}}"
                               class="border-b-4 border-transparent focus:border-blue-600 mx-5 -mb-0.5 transition-all ease-in-out duration-500">SMA
                            </a>
                        </div>
                        <div class="grid grid-cols-2 md:grid-cols-4 gap-5 mt-10">
                            @forelse($alumni as $key => $value)
                                {{--                                {{dd($alumni)}}--}}
                                <div class="bg-white shadow-xl rounded-xl p-3">
                                    <img
                                        class="md:h-80 grayscale hover:grayscale-0 w-full object-cover rounded-2xl transition-all ease-in-out duration-300"
                                        src="{{asset('Upload/foto_komunitas/'.$value->picture)}}">
                                    <div class="px-3 py-2 pt-3">
                                        <div class="w-full flex justify-between mb-1">
                                            <div class="flex gap-x-1 align-text-bottom mb-2">
                                                <div class="m-auto text-sm md:text-2xl font-bold">
                                                    {{$value->name}}
                                                    <div class="my-5 text-sm font-light italic">
                                                        {{$value->pesan}}
                                                    </div>
                                                    <div class="mt-5">
                                                        <div class="text-xs font-light italic">{{$value->status}}</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @empty
                                Data Kosong
                            @endforelse
                        </div>
                        <div class="my-10">
                            {{$alumni->links('widgets.custom_pagination')}}
                        </div>
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
