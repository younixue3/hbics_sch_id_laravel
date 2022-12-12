@extends('layouts.front.master')
@section('title', 'Visi Misi')
@section('content')
    <div class="bg-pattern pt-72 pb-10 text-center">
        <h1 id="hero_section" class="hidden mb-20 text-5xl font-bold text-blue-900">Visi Misi</h1>
        <div class="flex">
            <div class="m-auto w-[65rem] px-10">
                <div class="bg-white rounded-3xl shadow-xl p-5">
                    <workspace-pages-output-function editmode="true" fetchdata="{{$pages != null ? $pages->content : ''}}" urlasset="{{asset('Upload/foto_content')}}"></workspace-pages-output-function>
                </div>
            </div>
        </div>
    </div>
@endsection
