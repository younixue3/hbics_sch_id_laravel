@extends('layouts.front.master')
@section('title', 'Alumni')
@section('content')
    <div id="hero_section" class="h-52"></div>
    <div class="px-5 md:px-10">
        <div class="md:px-20 my-10">
            <div>
                <div class="flex justify-center border-b border-black">
                    <a href="{{route('teacher-staff','all')}}"
                        class="border-b-4 border-transparent focus:border-blue-600 mx-5 -mb-0.5 transition-all ease-in-out duration-500">All
                    </a>
                    <a href="{{route('teacher-staff','hhk')}}"
                        class="border-b-4 border-transparent focus:border-blue-600 mx-5 -mb-0.5 transition-all ease-in-out duration-500">TK & PG
                    </a>
                    <a href="{{route('teacher-staff','sdk')}}"
                        class="border-b-4 border-transparent focus:border-blue-600 mx-5 -mb-0.5 transition-all ease-in-out duration-500"
                        @click="changeMenu('sd')">SD
                    </a>
                    <a href="{{route('teacher-staff','smpk')}}"
                        class="border-b-4 border-transparent focus:border-blue-600 mx-5 -mb-0.5 transition-all ease-in-out duration-500">SMP
                    </a>
                    <a href="{{route('teacher-staff','smak')}}"
                        class="border-b-4 border-transparent focus:border-blue-600 mx-5 -mb-0.5 transition-all ease-in-out duration-500">SMA
                    </a>
                    <a href="{{route('teacher-staff','qrd')}}"
                       class="border-b-4 border-transparent focus:border-blue-600 mx-5 -mb-0.5 transition-all ease-in-out duration-500">QRD
                    </a>
                    <a href="{{route('teacher-staff','finance')}}"
                       class="border-b-4 border-transparent focus:border-blue-600 mx-5 -mb-0.5 transition-all ease-in-out duration-500">Finance
                    </a>
                    <a href="{{route('teacher-staff','hrga')}}"
                       class="border-b-4 border-transparent focus:border-blue-600 mx-5 -mb-0.5 transition-all ease-in-out duration-500">HRGA
                    </a>
                </div>
                <div class="grid md:grid-rows-3 grid-cols-4 md:grid-cols-3 gap-5 mt-10">
                    @forelse($teacherstaff as $key => $value)
                        <div>
                            <img class="md:h-[49.25rem] w-full object-cover rounded-2xl"
                                 src="{{asset('assets/foto_content/')}}">
                            <div class="h-36 px-3 py-2 pt-3">
                                <div class="w-full flex justify-between mb-1">
                                    <div class="flex h-6 gap-x-1 align-text-bottom mb-2">
                                        <img class="rounded-full h-6 w-6 md:h-8 md:w-8 object-cover"
                                             src="{{asset('Upload/foto_teacher_staff/'.$value->picture)}}">
                                        <div class="m-auto text-xs md:text-base truncate">
                                            {{$value->first_name}}
                                        </div>
                                    </div>
                                    <div class="flex h-5 gap-x-5">
                                        <button class="text-xs md:text-lg"><i class="fas fa-heart"></i></button>
                                        <button class="text-xs md:text-lg"><i class="fas fa-share"></i></button>
                                    </div>
                                </div>
                                <h3 class="text-2xl">{{$value->title}}</h3>
                            </div>
                        </div>
                    @empty
                        Data Kosong
                    @endforelse

                </div>
            </div>
        </div>
    </div>
@endsection
