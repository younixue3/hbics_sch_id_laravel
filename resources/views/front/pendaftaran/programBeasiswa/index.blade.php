@extends('layouts.front.master')
@section('title', 'Program Beasiswa')
@section('content')
    <div class="bg-pattern pt-72 pb-10 px-32 text-center">
        <h1 id="hero_section" class="mb-20 text-5xl font-bold text-blue-900">Program Beasiswa</h1>
        <div class="flex">
            <div class="m-auto px-10 text-left">
                <div class="grid grid-cols-1 lg:grid-cols-4 gap-5">
                    <div class="bg-white grid grid-rows-5 rounded-3xl shadow-xl p-5">
                        <div class="row-span-2">
                            <div class="h-10 w-10 rounded-full">
                                <img src="{{asset('assets/logo/Asset6.svg')}}">
                            </div>
                            <h3 class="mt-4 font-semibold text-2xl">BEASISWA BEST STUDENT</h3>
                        </div>
                        <div class="row-span-2 text-gray-400 my-5 px-3">
                            <ol class="list-disc list-inside">
                                <li>Primary School</li>
                                <li>Grade 1</li>
                                <li>Alumni</li>
                            </ol>
                        </div>
                        <div class="self-start">
                            <a href="#" class="text-blue-800 font-bold">Selengkapnya</a>
                        </div>
                    </div>
                    <div class="bg-white grid grid-rows-5 rounded-3xl shadow-xl p-5">
                        <div class="row-span-2">
                            <div class="h-10 w-10 rounded-full">
                                <img src="{{asset('assets/logo/Asset1.svg')}}">
                            </div>
                            <h3 class="mt-4 font-semibold text-2xl">BEASISWA BEST CHARACTER (SD)</h3>
                        </div>
                        <div class="row-span-2 text-gray-400 my-5 px-3">
                            <ol class="list-disc list-inside">
                                <li>Primary School</li>
                                <li>Grade 1</li>
                                <li>Alumni</li>
                            </ol>
                        </div>
                        <div class="self-start">
                            <a href="#" class="text-blue-800 font-bold">Selengkapnya</a>
                        </div>
                    </div>
                    <div class="bg-white grid grid-rows-5 rounded-3xl shadow-xl p-5">
                        <div class="row-span-2">
                            <div class="h-10 w-10 rounded-full">
                                <img src="{{asset('assets/logo/Asset4.svg')}}">
                            </div>
                            <h3 class="mt-4 font-semibold text-2xl">BEASISWA PRESTASI LOMBA (AKADEMIK/NON AKADEMIK)</h3>
                        </div>
                        <div class="row-span-2 text-gray-400 my-5 px-3">
                            <ol class="list-disc list-inside">
                                <li>Grade 1, Grade 7 SMP & Grade 10 SMA</li>
                                <li>Berprestasi dalam Akademi / Non-Akademik</li>
                                <li>Beasiswa 100% Basic & SPP selama 3 Tahun*</li>
                            </ol>
                        </div>
                        <div class="self-start">
                            <a href="#" class="text-blue-800 font-bold">Selengkapnya</a>
                        </div>
                    </div>
                    <div class="bg-white grid grid-rows-5 rounded-3xl shadow-xl p-5">
                        <div class="row-span-2">
                            <div class="h-10 w-10 rounded-full">
                                <img src="{{asset('assets/logo/Asset2.svg')}}">
                            </div>
                            <h3 class="mt-4 font-semibold text-2xl">BEASISWA RAPOR</h3>
                        </div>
                        <div class="row-span-2 text-gray-400 my-5 px-3">
                            <ol class="list-disc list-inside">
                                <li>Grade 7 SMP & Grade 10 SMA</li>
                                <li>Beasiswa berdasarkan Nilai Rapor Siswa</li>
                                <li>Beasiswa 100% Basic & SPP selama 3 Tahun*</li>
                            </ol>
                        </div>
                        <div class="self-start">
                            <a href="#" class="text-blue-800 font-bold">Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

