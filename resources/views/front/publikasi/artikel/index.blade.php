@extends('layouts.front.master')
@section('title', 'Artikel')
@section('content')
    <div id="hero_section" class="h-52"></div>
    <div class="px-5 md:px-32">
        <div
            class="w-full h-full lg:h-[35rem] grid grid-cols-1 md:grid-cols-4 md:grid-rows-2 gap-5 lg:gap-8 overflow-hidden px-5 md:px-20 z-10">
            @forelse($cardartikel as $key => $value)
                @if($cardartikel->count() === 2)
                    <content-card-component insight="1"
                                            item="{{$value}}"
                                            author="{{$value->users_create()->user()}}"
                                            author_pic="{{$value->users_create()->user()->foto_profile()->img}}"
                                            urlshow="{{route('acara.show', $value->randKey)}}"></content-card-component>
                @elseif($cardartikel->count() === 3)
                    <content-card-component insight="{{++$key === 3 ? 2 : $key}}"
                                            item="{{$value}}"
                                            author="{{$value->users_create()->user()}}"
                                            author_pic="{{$value->users_create()->user()->foto_profile()->img}}"
                                            urlshow="{{route('acara.show', $value->randKey)}}"></content-card-component>
                @else
                    <content-card-component insight="{{++$key}}"
                                            item="{{$value}}"
                                            author="{{$value->users_create()->user()}}"
                                            author_pic="{{$value->users_create()->user()->foto_profile()->img}}"
                                            urlshow="{{route('acara.show', $value->randKey)}}"></content-card-component>
                @endif
                    @empty
                Data kosong
            @endforelse
        </div>
        <div class="my-10">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-5">
                @forelse($artikel as $key => $value)
                    <a class="md:row-span-1" href="{{route('acara.show', $value->randKey)}}">
                        @if($value->type === 'video')
                            <video class="md:h-96 w-full object-cover rounded-2xl" autoplay loop muted>
                                <source src="{{asset('Upload/foto_content/'.$value->thumbnail)}}#t=0,10">
                            </video>
                        @else
                            <img class="md:h-96 w-full object-cover rounded-2xl"
                                 src="{{asset('Upload/foto_content/'.$value->thumbnail)}}">
                        @endif
                        <div class="h-36 overflow-hidden px-3 py-2 pt-3">
                            <div class="w-full flex justify-end mb-1">
                                <div class="flex h-5 gap-x-5">
                                    <button class="text-xs md:text-lg"><i class="fas fa-heart"></i></button>
                                    <button class="text-xs md:text-lg"><i class="fas fa-share"></i></button>
                                </div>
                            </div>
                            <h3 class="text-2xl">{{$value->title}}</h3>
                        </div>
                    </a>
                @empty
                    Data kosong
                @endforelse
            </div>
            {{$artikel->links('widgets.custom_pagination')}}
        </div>
@endsection
