@extends('layouts.dashboard.master')
@section('title', 'Pages')
@section('content')
        <div class="rounded-2xl bg-white overflow-hidden">
            <workspace-pages-function editmode="true"
                                      store_link="{{route('dashboard.pages.update',$id)}}"
                                      fetchdata="{{$content->latest()->first() != null ? $content->latest()->first()->item : ''}}"
                                      @submit="submitPublikasi">
                <input type="hidden" name="_method" value="put">
            </workspace-pages-function>
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
