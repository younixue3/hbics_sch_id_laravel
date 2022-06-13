@extends('layouts.front.master')
@section('title', 'Home')
@section('content')
    <div class="">
        <hero-component></hero-component>
        <div class="grid grid-cols-1 gap-y-0 md:gap-y-10">
            <div class=" px-10 lg:px-80">
                <div class="m-auto w-full align-middle my-10">
                    <div
                        class="md:absolute text-gray-700 md:text-gray-300 md:-translate-x-10 md:-translate-y-10 text-5xl md:text-8xl text-center">
                        <i class="fa-solid fa-quote-left"></i>
                    </div>
                    <div class="relative md:my-20 text-lg text-center md:text-left z-10">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque quis dui tempor, porta
                            justo vel, suscipit tellus. Vivamus sed lectus nec tellus fringilla fermentum vel nec lorem.
                            Nullam eros urna, rutrum ac euismod eu, ultricies sed nibh. Vivamus finibus ligula non
                            tempus consequat.<span class="mx-3 italic font-light block md:inline"> - Jane Doe - </span>
                        </p>
                    </div>
                    <div
                        class="md:absolute md:right-0 text-gray-700 md:text-gray-300 md:-translate-x-80 md:-translate-y-40 text-5xl md:text-8xl text-center z-0">
                        <i class="fa-solid fa-quote-right"></i>
                    </div>
                </div>
            </div>
            <div class="md:flex px-5">
                <div class="md:w-2/5 h-96 bg-white rounded-3xl shadow-lg shadow-neutral-500">
                    <img class="w-full h-96 rounded-3xl object-cover"
                         src="{{asset('assets/stock_photo_rdev/Pic-1.webp')}}">
                </div>
                <div class="md:w-3/5 grid grid-cols-1 gap-5 text-center md:text-start md:pl-10 py-10">
                    <h1 class="text-4xl font-bold">SEKOLAH KARYA</h1>
                    <p class="italic">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque
                        quis dui tempor, porta justo vel, suscipit tellus. Vivamus sed lectus nec tellus fringilla
                        fermentum vel nec lorem. Nullam eros urna, rutrum ac euismod eu, ultricies sed nibh. Vivamus
                        finibus ligula non tempus consequat. Vestibulum aliquam maximus odio ac varius. Suspendisse
                        sapien lorem, fringilla ac augue eu, congue tempor magna.</p>
                    <div class="flex">
                        <img class="m-auto h-36" src="{{asset('assets/stock_photo_rdev/AKRE-01-01.webp')}}">
                    </div>
                </div>
            </div>
            <div class="my-10 md:my-20 md:px-20">
                <div class="z-10">
                    <div
                        class="w-full mb-5 md:pt-10 pl-0 lg:pl-10 z-10 order-first md:order-last text-center md:text-left">
                        <h1 class="text-3xl md:text-5xl font-bold uppercase">Prestasi Kami</h1>
                    </div>
                    <div
                        class="w-full h-full lg:h-[35rem] grid grid-cols-1 md:grid-cols-4 md:grid-rows-2 gap-5 lg:gap-8 overflow-hidden px-5 md:px-32 z-10">
                        @forelse($prestasi as $key => $value)
                            @if($prestasi->count() === 2)
                                <content-card-component insight="1"
                                                        item="{{$value}}"
                                                        author="{{$value->users_create()->user()}}"
                                                        author_pic="{{$value->users_create()->user()->foto_profile()->img}}"
                                                        urlshow="{{route('acara.show', $value->randKey)}}"></content-card-component>
                            @elseif($prestasi->count() === 3)
                                <content-card-component insight="{{++$key === 3 ? 2 : $key}}"
                                                        item="{{$value}}"
                                                        author="{{$value->users_create()->user()}}"
                                                        author_pic="{{$value->users_create()->user()->foto_profile()->img}}"
                                                        urlshow="{{route('acara.show', $value->randKey)}}"></content-card-component>
                            @else
                                <content-card-component insight="{{++$key}}"
                                                        item="{{$value}}"
                                                        author="{{$value->users_create()->user()}}"
                                                        author_pic="{{$value->users_create()->user()->foto_profile()->img}}"
                                                        urlshow="{{route('acara.show', $value->randKey)}}"></content-card-component>
                            @endif
                        @empty
                            Data kosong
                        @endforelse
                    </div>
                </div>
            </div>
            <div class="relative md:flex my-10 md:my-20 overflow-hidden">
                <div
                    class="absolute bottom-20 w-full h-80 rounded-3xl bg-gradient-to-br from-yellow-300 to-amber-500 transform scale-110 skew-y-3 z-0 shadow-lg shadow-neutral-400 transition-all ease-in-out duration-500">

                </div>
                <div class="w-full md:px-20">
                    <div
                        class="w-full md:pt-10 z-10 px-5 md:px-0 mb-5 order-first md:order-last text-center md:text-left">
                        <h1 class="text-3xl md:text-5xl font-bold uppercase">Alumni Harapan Bangsa</h1>
                    </div>
                    <div
                        class="w-full h-full lg:h-[35rem] grid grid-cols-1 md:grid-cols-4 md:grid-rows-2 gap-5 lg:gap-8 overflow-hidden px-5 md:px-32 z-10">
                        @php
                            $urut = 3;
                        @endphp
                        @forelse($prestasi as $key => $value)
                            @if($prestasi->count() === 2)
                                <content-card-component insight="3"
                                                        item="{{$value}}"
                                                        author="{{$value->users_create()->user()}}"
                                                        author_pic="{{$value->users_create()->user()->foto_profile()->img}}"
                                                        urlshow="{{route('acara.show', $value->randKey)}}"></content-card-component>
                            @elseif($prestasi->count() === 3)
                                <content-card-component insight="{{ --$urut === 0 ? 2 : $urut}}"
                                                        item="{{$value}}"
                                                        author="{{$value->users_create()->user()}}"
                                                        author_pic="{{$value->users_create()->user()->foto_profile()->img}}"
                                                        urlshow="{{route('acara.show', $value->randKey)}}"></content-card-component>
                            @else
                                <content-card-component insight="{{ --$urut }}"
                                                        item="{{$value}}"
                                                        author="{{$value->users_create()->user()}}"
                                                        author_pic="{{$value->users_create()->user()->foto_profile()->img}}"
                                                        urlshow="{{route('acara.show', $value->randKey)}}"></content-card-component>
                            @endif
                        @empty
                            Data kosong
                        @endforelse
                    </div>
                </div>
            </div>
            <div class="relative md:flex h-[35rem] overflow-hidden -mb-36">
                <div
                    class="absolute top-32 w-full h-52 rounded-3xl bg-gradient-to-br from-sky-600 to-blue-900 transform scale-110 skew-y-3 rotate-6 z-0 shadow-lg shadow-neutral-400 transition-all ease-in-out duration-500">

                </div>
                <testimoni-component get_req="{{route('api.getTestimoni')}}"></testimoni-component>
            </div>
        </div>
    </div>
@endsection
