@extends('layouts.front.master')
@section('title', 'Petunjuk Pendaftaran')
@section('content')
    <div class="bg-pattern pt-72 pb-10 text-center">
        <h1 id="hero_section" class="mb-20 text-5xl font-bold text-blue-900">Petunjuk Pendaftaran</h1>
        <div class="flex">
            <tab-bar-component hhk="{{$petunjuk_pendaftaran_hhk}}" sd="{{$petunjuk_pendaftaran_sd}}" smp="{{$petunjuk_pendaftaran_smp}}" sma="{{$petunjuk_pendaftaran_sma}}"></tab-bar-component>
        </div>
    </div>
@endsection
