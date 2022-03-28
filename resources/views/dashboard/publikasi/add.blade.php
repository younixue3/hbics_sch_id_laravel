@extends('layouts.dashboard.master')
@section('title', 'Create')
@section('content')
    <workspace-publikasi-function store_link="{{route('dashboard.publikasi.store')}}">
        <multiple-select-component nameoption="selectcategory" valueoption="{{$category}}"></multiple-select-component>
    </workspace-publikasi-function>

@endsection
