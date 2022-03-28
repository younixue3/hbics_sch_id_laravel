@extends('layouts.dashboard.master')
@section('title', 'Edit')
@section('content')
{{--    {{dd($publikasi->publikasis_contents()->first()->content()->first()->item)}}--}}
    <workspace-publikasi-function fetchdata="{{$publikasi->publikasis_contents()->first()->content()->first()->item}}" store_link="{{route('dashboard.publikasi.update',$publikasi->randKey)}}">
        <multiple-select-component nameoption="selectcategory" valueoption="{{$category}}"></multiple-select-component>
        <input type="hidden" name="_method" value="put">
    </workspace-publikasi-function>

@endsection
