@extends('layouts.master')
@section('title', 'Petunjuk Pendaftaran')
@section('content')
    <div class="bg-pattern pt-72 pb-10 text-center">
        <h1 id="hero_section" class="mb-20 text-5xl font-bold text-blue-900">Program Beasiswa</h1>
        <div class="flex">
            <div class="m-auto px-10 text-left">
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-5">
                    <div class="bg-white grid grid-rows-6 rounded-3xl shadow-xl p-5">
                        <div class="row-span-2">
                            <div class="h-10 w-10 rounded-full bg-green-100 p-2 flex">
                                <i class="fa-solid fa-share m-auto text-green-600"></i>
                            </div>
                            <h3 class="mt-4 font-semibold text-2xl">BEASISWA BEST STUDENT & BEST CHARACTER (SD)</h3>
                        </div>
                        <div class="row-span-3 text-gray-400 my-5 px-3">
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
                    <div class="bg-white grid grid-rows-6 rounded-3xl shadow-xl p-5">
                        <div class="row-span-2">
                            <div class="h-10 w-10 rounded-full bg-amber-100 p-2 flex">
                                <i class="fa-solid fa-medal m-auto text-amber-600"></i>
                            </div>
                            <h3 class="mt-4 font-semibold text-2xl">BEASISWA PRESTASI LOMBA (AKADEMIK/NON AKADEMIK)</h3>
                        </div>
                        <div class="row-span-3 text-gray-400 my-5 px-3">
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
                    <div class="bg-white grid grid-rows-6 rounded-3xl shadow-xl p-5">
                        <div class="row-span-2">
                            <div class="h-10 w-10 rounded-full bg-blue-100 p-2 flex">
                                <i class="fa-solid fa-square-poll-vertical m-auto text-blue-600"></i>
                            </div>
                            <h3 class="mt-4 font-semibold text-2xl">BEASISWA RAPOR</h3>
                        </div>
                        <div class="row-span-3 text-gray-400 my-5 px-3">
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

