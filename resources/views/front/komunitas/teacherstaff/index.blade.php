@extends('layouts.front.master')
@section('title', 'Alumni')
@section('content')
    <div id="hero_section" class="h-52"></div>
    <div class="px-5 md:px-10 bg-pattern">
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
                <div class="grid grid-cols-4 md:grid-cols-3 gap-5 mt-10">
                    @forelse($teacherstaff as $key => $value)
                        <div class="bg-white shadow-xl rounded-xl p-3">
                            <img class="md:h-80 grayscale hover:grayscale-0 w-full object-cover rounded-2xl transition-all ease-in-out duration-300"
                                 src="{{asset('Upload/foto_teacher_staff/'.$value->picture)}}">
                            <div class="px-3 py-2 pt-3">
                                <div class="w-full flex justify-between mb-1">
                                    <div class="flex     gap-x-1 align-text-bottom mb-2">
                                        <img class="rounded-full h-6 w-6 md:h-8 md:w-8 object-cover"
                                             src="{{asset('Upload/foto_teacher_staff/'.$value->picture)}}">
                                        <div class="m-auto text-sm md:text-2xl font-bold">
                                            {{$value->first_name}}
                                            <div class="m-auto text-sm md:text-xl font-normal">
                                                {{$value->last_name}}
                                            </div>
                                            <div class="mt-20">
                                                <div class="text-xl font-semibol uppercase">{{$value->area}}</div>
                                                <div class="text-lg font-normal">{{$value->profesi}}</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex h-5 gap-x-5">
                                        <button class="text-xs md:text-lg"><i class="fa-solid fa-envelope"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                        Data Kosong
                    @endforelse
                </div>
                <div class="my-10">
                    {{$teacherstaff->links('widgets.custom_pagination')}}
                </div>
            </div>
        </div>
    </div>
@endsection
