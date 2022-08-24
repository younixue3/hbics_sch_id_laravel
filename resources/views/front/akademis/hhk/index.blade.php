@extends('layouts.front.master')
@section('title', 'Happy Holy Kids Balikpapan')
@section('content')
    <div>
        <div id="hero_section" class="h-[35rem] bg-fixed bg-no-repeat bg-cover flex bg-center"
             style="background-image: url('{{asset('assets/stock_photo_rdev/cambridge.webp')}}')">
            <div class="m-auto w-full h-full text-center text-white flex relative backdrop-brightness-75">
                <div class="mx-auto mt-auto mb-20">
                    <h1 class="text-2xl md:text-6xl font-bold uppercase">
                        {{$title}}
                    </h1>
                </div>
            </div>
        </div>
        <div class="bg-akademis bg-no-repeat bg-left pb-5">
            <div class="text-center mx-10 md:mx-20">
                <workspace-pages-output-function editmode="true" fetchdata="{{$page->latest()->first() != null ? $page->latest()->first()->item : ''}}"></workspace-pages-output-function>
            </div>
            <div class="text-center">
                <h2 class="text-3xl font-bold">Prestasi Happy Holy Kids sebagai TK Favorit Balikpapan</h2>
                <snap-alumni-component area="{{route('api.getTestimoniHhk')}}"></snap-alumni-component>
            </div>
        </div>
    </div>
@endsection
