@extends('layouts.front.master')
@section('title', 'Publikasi')
@section('content')
    <div id="hero_section" class="h-52"></div>
    <div class="px-5 md:px-10">

        <div class="md:px-20 my-10 mb-32">
            <workspace-output urlasset="{{asset('Upload/foto_content')}}"
                              fetchdata="{{$publikasi->publikasis_contents()->first()->content()->first()->item}}"></workspace-output>
        </div>
        <div class="md:px-20 mb-20">
            <likes-component url="{{route('like.insert', $publikasi->randKey)}}"></likes-component>
            <div class="grid grid-cols-1 gap-y-5">
                <div class="bg-white rounded-xl shadow-lg p-5 grid grid-cols-1 gap-y-5 divide-y">
                    <label class="text-xl">
                        Komentar
                    </label>
                    @forelse($comment as $key => $value)
                        <div class="py-4">
                            <div class="pl-7 font-bold">
                                <span
                                    class="italic font-normal text-sm text-gray-400 mr-2">From :</span> {{$value->comment()->name}}
                            </div>
                            <div class="flex rounded-md shadow-md mt-2">
                            <textarea disabled
                                      class="resize-none flex-1 block w-full rounded-md focus:outline-none px-3 pt-2 pb-1 bg-gray-100"
                                      name="comment"
                                      placeholder="Search what you want to know">{{$value->comment()->comment}}</textarea>
                            </div>
                        </div>
                    @empty
                        Komentar Kosong
                    @endforelse
                </div>
                <div class="bg-white rounded-xl shadow-lg p-5">
                    <label class="text-xl">Masukkan Komentar Anda</label>
                    <form class="my-5" action="{{route('comment.store', $publikasi->randKey)}}">
                        <input type="text"
                               class="rounded-xl border shadow-md h-10 md:w-96 px-3 pt-2 pb-1 focus:outline-none"
                               name="name" placeholder="Your Name (Can be Anonym)">
                        <div class="flex rounded-xl shadow-md mt-5">
                            <textarea
                                class="resize-none flex-1 block border border-r-0 w-full rounded-l-xl focus:outline-none px-3 pt-2 pb-1"
                                name="comment"
                                placeholder="Search what you want to know"></textarea>
                            <button type="submit"
                                    class="inline-flex items-center rounded-r-xl border-l-0 border border-l-0 text-white w-12">
                                <i class="far fa-paper-plane text-gray-600 text-xl m-auto"></i>
                            </button>
                        </div>
                    </form>
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
@section('modalAdd')
    <div class="w-96 text-left text-sm">
        <label class="block font-medium text-gray-700">
            Name
        </label>
        <input type="text" name="name"
               class="flex-1 block w-full rounded-xl focus:outline-none px-3 py-2 border border-gray-300"/>
    </div>
    <div class="text-left text-sm">
        <label class="block font-medium text-gray-700">
            Email
        </label>
        <input type="email" name="email"
               class="flex-1 block w-full rounded-xl focus:outline-none px-3 py-2 border border-gray-300"/>
    </div>
    <div class="text-left text-sm">
        <label class="block font-medium text-gray-700">
            Phone Number
        </label>
        <input type="text" name="phone_number"
               class="flex-1 block w-full rounded-xl focus:outline-none px-3 py-2 border border-gray-300"/>
    </div>
@endsection
