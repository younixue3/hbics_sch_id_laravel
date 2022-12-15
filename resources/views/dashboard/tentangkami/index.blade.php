@extends('layouts.dashboard.master')
@section('title', 'Pages')
@section('content')
<div class="bg-pattern pt-72 pb-10 text-left">
    <h1 id="hero_section" class="mb-20 text-5xl font-bold text-blue-900 text-center">Filosofi Pendidikan</h1>
    <div class="flex">
        <div class="m-auto w-[65rem] px-10 border border-2 rounded-xl">
            <workspace-pages-function editmode="true"
                                      urlasset="{{asset('Upload/foto_content')}}"
                                      store_link="{{route('dashboard.metode-pembelajaran.store')}}"
                                      fetchdata="{{$pages != null ? $pages->item : ''}}"
                                      @submit="submitPublikasi">
                <input type="hidden" name="_method" value="post">
            </workspace-pages-function>
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
