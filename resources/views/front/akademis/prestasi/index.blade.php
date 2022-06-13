@extends('layouts.front.master')
@section('title', 'Teacher & Staff')
@section('content')
    <div id="hero_section" class="h-52"></div>
    <div class="px-5 md:px-10 bg-pattern">
        <div class="md:px-20 my-10">
            <div>
                <div class="grid grid-cols-3  text-sm md:text-base justify-center border-b border-black">
                    <form action="{{route('prestasi')}}" class="px-5 flex my-3">
                        <label class="mr-5">Filter</label>
                        <span class="w-32">
                    <select name="area"
                            class="w-full h-full focus:outline-none px-3 py-0.5 border border-r-0 border-gray-300">
                        <option value="" disabled selected>--Area--</option>
                        <option value="" {{$request->area === '' ? 'selected' : 'selected'}}>Semua</option>
                        <option value="tk" {{$request->area === 'tk' ? 'selected' : ''}}>hhk</option>
                        <option value="sd" {{$request->area === 'sd' ? 'selected' : ''}}>sd</option>
                        <option value="smp" {{$request->area === 'smp' ? 'selected' : ''}}>smp</option>
                        <option value="sma" {{$request->area === 'sma' ? 'selected' : ''}}>sma</option>
                    </select>
                </span>
                        <input type="text" name="description"
                               class="w-52 focus:outline-none px-3 py-0.5 border border-r-0 border-gray-300"
                               placeholder="Search" value="{{$request->description}}">
                        <button type="submit" class="w-10 focus:outline-none px-3 py-0.5 border border-gray-300"><i
                                class="fas fa-search"></i></button>
                    </form>
                </div>
                <div class="grid grid-cols-2 md:grid-cols-4 gap-5 mt-10">
                    @forelse($prestasi as $key => $value)
                        <div class="bg-white shadow-xl rounded-xl p-3">
                            <img
                                class="md:h-80 grayscale hover:grayscale-0 w-full object-cover rounded-2xl transition-all ease-in-out duration-300"
                                src="{{asset('Upload/foto_siswa/'.$value->picture)}}">
                            <div class="px-3 py-2 pt-3">
                                <div class="w-full flex justify-between mb-1">
                                    <div class="flex     gap-x-1 align-text-bottom mb-2">
                                        <div class="m-auto text-sm md:text-2xl font-bold">
                                            <div class="m-auto text-sm md:text-xl font-normal">
                                                {{$value->name}}
                                            </div>
                                            <div>
                                                <div
                                                    class="text-sm md:text-lg font-semibold">{{$value->prestasi}}</div>
                                                <div class="text-sm md:text-sm font-normal uppercase">{{$value->area}}</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                        Data Kosong
                    @endforelse
                </div>
                <div class="my-10">
                    {{$prestasi->links('widgets.custom_pagination')}}
                </div>
            </div>
        </div>
    </div>
@endsection
