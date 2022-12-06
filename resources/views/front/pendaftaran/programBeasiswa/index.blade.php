@extends('layouts.front.master')
@section('title', 'Program Beasiswa')
@section('content')
    <div class="bg-pattern pt-72 pb-10 px-32 text-center">
        <h1 id="hero_section" class="mb-20 text-5xl font-bold text-blue-900">Program Beasiswa</h1>
        <div class="flex">
            <div class="m-auto px-10 text-left">
                <div class="grid grid-cols-1 lg:grid-cols-4 gap-5">
                    @foreach($beasiswa as $value => $item)
                        <div class="bg-white grid grid-rows-5 w-60 h-96 rounded-3xl shadow-xl p-5">
                            <div class="row-span-2">
                                <div class="h-10 w-10 rounded-full">
                                    <img src="{{asset('assets/logo/Asset6.svg')}}">
                                </div>
                                <h3 class="mt-4 font-semibold text-2xl">{{$item->title}}</h3>
                            </div>
                            <div class="row-span-2 text-gray-400 my-5 px-3">
                                {{$item->content}}
                            </div>
                            <div class="self-start">
                                <a href="#" class="text-blue-800 font-bold">Selengkapnya</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection

