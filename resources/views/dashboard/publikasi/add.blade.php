@extends('layouts.dashboard.master')
@section('title', 'Dashboard')
@section('content')
    <workspace-publikasi-function store_link="{{route('dashboard.publikasi.store')}}"></workspace-publikasi-function>
@endsection
