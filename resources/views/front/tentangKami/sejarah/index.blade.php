@extends('layouts.front.master')
@section('title', 'Sejarah')
@section('content')
    <div class="bg-pattern pt-72 pb-10 text-center">
        <h1 id="hero_section" class="mb-20 text-5xl font-bold text-blue-900">Sejarah</h1>
        <div class="px-20">
            <div class="p-10 bg-white rounded-xl shadow-xl">
                <workspace-pages-output-function editmode="true" fetchdata="{{$pages != null ? $pages->item : ''}}" urlasset="{{asset('Upload/foto_content')}}"></workspace-pages-output-function>
            </div>
        </div>
    </div>
@endsection
