@extends('layouts.front.master')
@section('title', 'Filosofi Pendidikan')
@section('content')
    <div class="bg-pattern pt-72 pb-10 text-left">
        <h1 id="hero_section" class="mb-20 text-5xl font-bold text-blue-900 text-center">Filosofi Pendidikan</h1>
        <div class="flex">
            <div class="m-auto w-[65rem] px-10">
                <div class="bg-white rounded-3xl shadow-xl p-5">
                    <h2 class="text-3xl font-bold">Sekolah KARYA</h2>
                    <p class="my-3">{{$pages->paragraph}}</p>
                    <div class="border-l-4 border-blue-600 bg-blue-200 p-5 italic">
                        {{$pages->markup_paragraph}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
