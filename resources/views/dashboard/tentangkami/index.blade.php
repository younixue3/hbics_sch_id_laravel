@extends('layouts.dashboard.master')
@section('title', 'Pages')
@section('content')
<div class="bg-pattern pt-72 pb-10 text-left">
    <h1 id="hero_section" class="mb-20 text-5xl font-bold text-blue-900 text-center">Filosofi Pendidikan</h1>
    <div class="flex">
        <div class="m-auto w-[65rem] px-10">
            <form action="{{route('dashboard.filosofi-karya.store')}}" method="post" class="bg-white rounded-3xl shadow-xl p-5">
                @csrf
                <h2 class="text-3xl font-bold">Sekolah KARYA</h2>
{{--                <paragraph-component></paragraph-component>--}}
                <textarea name="paragraph" class="my-3 w-full h-96 border border-gray-500 p-1 resize-none rounded-lg">{{$pages->paragraph}}</textarea>
                <div class="border-l-4 border-blue-600 bg-blue-200 p-5 italic">
{{--                    <paragraph-component></paragraph-component>--}}
                    <textarea name="markup_paragraph" class="w-full h-96 border border-gray-500 p-1 resize-none rounded-lg">{{$pages->markup_paragraph}}</textarea>
                </div>
                <input class="bg-emerald-400 px-4 py-0.5 mt-4 rounded-lg" type="submit">
            </form>
        </div>
    </div>
</div>
@endsection
@section('notification')
    <div class="fixed bottom-0 right-0 flex-row">
        @forelse ($errors->all() as $error)
            <notification-component type="error" message="{{$error}}"></notification-component>
        @empty
        @endforelse
        @if(session()->has('success'))
            <notification-component type="success" message="{{ session()->get('success') }}"></notification-component>
        @endif
    </div>
@endsection
