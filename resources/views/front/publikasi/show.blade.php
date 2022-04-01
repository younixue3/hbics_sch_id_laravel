@extends('layouts.front.master')
@section('title', 'Alumni')
@section('content')
    <div id="hero_section" class="h-52"></div>
    <div class="px-5 md:px-10">

        <div class="md:px-20 my-10 mb-32">
            <workspace-output urlasset="{{asset('Upload/foto_content')}}" fetchdata="{{$publikasi->publikasis_contents()->first()->content()->first()->item}}"></workspace-output>
        </div>
        <div class="md:px-20">
            <div>
                <input type="text" class="rounded-md shadow-md h-10 w-96" placeholder="Your Name (Can be Anonym)">
                <div class="flex rounded-md shadow-md mt-5">
                    <textarea class="resize-none flex-1 block border border-r-0 w-full rounded-l-xl focus:outline-none px-3 pt-2 pb-1"
                              placeholder="Search what you want to know"></textarea>
                    <button class="inline-flex items-center rounded-r-xl border-l-0 border border-l-0 text-white w-12">
                        <i class="far fa-paper-plane text-gray-600 text-xl m-auto"></i>
                    </button>
                </div>
            </div>
        </div>
        <div
            class="w-full h-full lg:h-[35rem] grid grid-cols-1 md:grid-cols-4 md:grid-rows-2 gap-5 lg:gap-8 overflow-hidden px-5 md:px-0 z-10">
            @forelse($cardpublikasi as $key => $value)
                <content-card-component insight="{{++$key}}"
                                        item="{{$value}}"
                                        author="{{$value->users_create()->user()}}"
                                        author_pic="{{$value->users_create()->user()->foto_profile()->img}}"
                                        urlshow="{{route('publikasi.show', $value->randKey)}}"></content-card-component>
            @empty
                Data kosong
            @endforelse
        </div>
    </div>
@endsection
