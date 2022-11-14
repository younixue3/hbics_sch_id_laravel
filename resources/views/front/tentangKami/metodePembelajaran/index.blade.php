@extends('layouts.front.master')
@section('title', 'Metode Pembelajaran')
@section('content')
    <div class="bg-pattern pt-72 pb-10 text-left">
        <h1 id="hero_section" class="mb-20 text-5xl font-bold text-blue-900 text-center">Metode Pembelajaran</h1>
        <div class="mx-5 md:mx-32 bg-white rounded-3xl shadow-xl p-2 md:p-10">
            <workspace-pages-output-function editmode="true" fetchdata="{{$pages != null ? $pages->item : ''}}" urlasset="{{asset('Upload/foto_content')}}"></workspace-pages-output-function>
        </div>
    </div>
@endsection
