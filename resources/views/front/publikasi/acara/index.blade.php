@extends('layouts.front.master')
@section('title', 'Alumni')
@section('content')
    <div id="hero_section" class="h-52"></div>
    <div class="px-5 md:px-10">
        <div
            class="w-full h-full lg:h-[35rem] grid grid-cols-1 md:grid-cols-4 md:grid-rows-2 gap-5 lg:gap-8 overflow-hidden px-5 md:px-0 z-10">
            @forelse($cardacara as $key => $value)
                <content-card-component imagecontent="{{asset('assets/foto_content/')}}"
                                        insight="{{++$key}}"
                                        title="{{$value->title}}"
                                        content="{{$value->title}}"></content-card-component>
            @empty
                Data kosong
            @endforelse
        </div>
        <div class="md:px-20 my-10">
            <div class="grid md:grid-rows-6 grid-cols-1 md:grid-cols-3 gap-5">
                @forelse($acara as $key => $value)
                    @if($key % 2 != 0)
                        <div class="md:row-span-2">
                            <img class="md:h-96 w-full object-cover rounded-2xl"
                                 src="{{asset('assets/foto_content/')}}">
                            <div class="h-36 px-3 py-2 pt-3">
                                <div class="w-full flex justify-between mb-1">
                                    <div class="flex h-6 gap-x-1 align-text-bottom mb-2">
                                        <img class="rounded-full h-6 w-6 md:h-8 md:w-8 object-cover"
                                             src="{{asset('Upload/foto_profile/'.$value->users_create()->user()->foto_profile()->img)}}">
                                        <div class="m-auto text-xs md:text-base truncate">
                                            {{$value->users_create()->user()->name}}
                                        </div>
                                    </div>
                                    <div class="flex h-5 gap-x-5">
                                        <button class="text-xs md:text-lg"><i class="fas fa-heart"></i></button>
                                        <button class="text-xs md:text-lg"><i class="fas fa-share"></i></button>
                                    </div>
                                </div>
                                <h3 class="text-2xl">{{$value->title}}</h3>
                            </div>
                        </div>
                    @else
                        <div class="md:row-span-2">
                            <img class="md:h-[49.25rem] w-full object-cover rounded-2xl"
                                 src="{{asset('assets/foto_content/')}}">
                            <div class="h-36 px-3 py-2 pt-3">
                                <div class="w-full flex justify-between mb-1">
                                    <div class="flex h-6 gap-x-1 align-text-bottom mb-2">
                                        <img class="rounded-full h-6 w-6 md:h-8 md:w-8 object-cover"
                                             src="{{asset('Upload/foto_profile/'.$value->users_create()->user()->foto_profile()->img)}}">
                                        <div class="m-auto text-xs md:text-base truncate">
                                            {{$value->users_create()->user()->name}}
                                        </div>
                                    </div>
                                    <div class="flex h-5 gap-x-5">
                                        <button class="text-xs md:text-lg"><i class="fas fa-heart"></i></button>
                                        <button class="text-xs md:text-lg"><i class="fas fa-share"></i></button>
                                    </div>
                                </div>
                                <h3 class="text-2xl">{{$value->title}}</h3>
                            </div>
                        </div>
                    @endif

                @empty
                    Data kosong
                @endforelse
            </div>
        </div>
    </div>
@endsection
