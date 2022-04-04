@extends('layouts.front.master')
@section('title', 'Alumni')
@section('content')
    <div id="hero_section" class="h-52"></div>
    <div class="px-5 md:px-10">
        <div
            class="w-full h-full lg:h-[35rem] grid grid-cols-1 md:grid-cols-4 md:grid-rows-2 gap-5 lg:gap-8 overflow-hidden px-5 md:px-0 z-10">
            @forelse($cardberita as $key => $value)
                <content-card-component insight="{{++$key}}"
                                        item="{{$value}}"
                                        author="{{$value->users_create()->user()}}"
                                        author_pic="{{$value->users_create()->user()->foto_profile()->img}}"
                                        urlshow="{{route('berita.show', $value->randKey)}}"></content-card-component>
            @empty
                Data kosong
            @endforelse
        </div>
        <div class="md:px-20 my-10">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-5">
                @forelse($berita as $key => $value)
                    @if($key % 2 != 0)
                        <a class="md:row-span-1 bg-white rounded-2xl" href="{{route('berita.show', $value->randKey)}}">
                            @if($value->type === 'video')
                                <video class="md:h-96 w-full object-cover rounded-t-2xl" autoplay loop muted>
                                    <source src="{{asset('Upload/foto_content/'.$value->thumbnail)}}#t=0,10">
                                </video>
                            @else
                                <img class="md:h-96 w-full object-cover rounded-t-2xl"
                                     src="{{asset('Upload/foto_content/'.$value->thumbnail)}}">
                            @endif
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
                        </a>
                    @else
                        <a class="md:row-span-2 bg-white rounded-2xl" href="{{route('berita.show', $value->randKey)}}">
                            @if($value->type === 'video')
                                <video class="md:h-[49.25rem] w-full object-cover rounded-t-2xl" autoplay loop muted>
                                    <source src="{{asset('Upload/foto_content/'.$value->thumbnail)}}#t=0,10">
                                </video>
                            @else
                                <img class="md:h-[49.25rem] w-full object-cover rounded-t-2xl"
                                     src="{{asset('Upload/foto_content/'.$value->thumbnail)}}">
                            @endif
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
                        </a>
                    @endif
                @empty
                    Data kosong
                @endforelse
        </div>
            {{$berita->links('widgets.custom_pagination')}}
    </div>
@endsection
