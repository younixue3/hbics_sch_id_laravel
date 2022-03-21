@extends('layouts.front.master')
@section('title', 'Alumni')
@section('content')
    <div id="hero_section" class="h-52"></div>
    <div class="px-5 md:px-10">
        <div class="md:px-20 my-10">
            <fasilitas-component url="{{route('api.getFasilitasAll')}}" asset="{{asset('Upload/fasilitas_assets')}}/"></fasilitas-component>
        </div>
    </div>
@endsection
