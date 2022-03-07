@extends('layouts.master')
@section('title', 'Kunjungi kami')
@section('content')
    <div class="bg-pattern pt-72 pb-10 text-center">
        <h1 id="hero_section" class="mb-20 text-5xl font-bold text-blue-900">Kunjungi kami</h1>
        <div class="md:flex py-20 px-10 md:px-20">
            <div class="md:w-2/5 md:flex relative">
                <div class="bg-white rounded-xl shadow-xl w-full md:w-96 px-10 py-5 mb-20 md:m-auto font-light">
                    Silakan mengisi form berikut ini untuk mengikuti virtual tur bersama kami:
                    <div class="mt-5 font-bold">
                        <div>
                            Senin-Jumat pukul 09.00 – 14.00 WITA
                        </div>
                        <div>
                            Sabtu pukul 09.00 – 12.00 WITA
                        </div>
                    </div>
                </div>
                <div
                    class="absolute right-1/2 md:right-0 translate-x-1/2 md:translate-x-10 -translate-y-14 md:-translate-y-10 bg-white h-20 md:h-40 w-20 md:w-40 shadow-xl rounded-2xl">
                    <img class="" src="{{asset('assets/stock_photo_rdev/3d-fluency-blue-paper-plane.png')}}">
                </div>
            </div>
            <div class="md:w-3/5 py-10 px-10 md:px-20 bg-white shadow-xl rounded-2xl w-full flex-row text-left text-sm md:text-base">
                <div class="my-2">
                    <span class="text-sm">Nama orang tua</span>
                    <input type="text"
                           class="bg-gray-100 w-full rounded-md py-2 pl-5 pr-3 shadow-sm focus:outline-none focus:border-sky-500 focus:ring-sky-500 focus:ring-1 font-semibold">
                </div>
                <div class="my-2">
                    <label class="text-sm">Alamat email</label>
                    <input type="text"
                           class="bg-gray-100 w-full rounded-md py-2 pl-5 pr-3 shadow-sm focus:outline-none focus:border-sky-500 focus:ring-sky-500 focus:ring-1 font-semibold">
                </div>
                <div class="my-2">
                    <label class="text-sm">Alamat</label>
                    <textarea
                        class="bg-gray-100 h-20 resize-none w-full rounded-md py-2 pl-5 pr-3 shadow-sm focus:outline-none focus:border-sky-500 focus:ring-sky-500 focus:ring-1 font-semibold"></textarea>
                </div>
                <div class="my-2 grid grid-cols-2 gap-5">
                    <div>
                        <label class="text-sm">Kota/Kab</label>
                        <select class="bg-gray-100 resize-none w-full rounded-md py-2 pl-5 pr-3 shadow-sm focus:outline-none focus:border-sky-500 focus:ring-sky-500 focus:ring-1 font-semibold">
                            <option>Pilih Kota/Kabupaten</option>
                        </select>
                    </div>
                    <div>
                        <label class="text-sm">Negara</label>
                        <select class="bg-gray-100 resize-none w-full rounded-md py-2 pl-5 pr-3 shadow-sm focus:outline-none focus:border-sky-500 focus:ring-sky-500 focus:ring-1 font-semibold">
                            <option>Pilih Negara</option>
                        </select>
                    </div>
                </div>
                <div class="my-2">
                    <label class="text-sm">Telepon</label>
                    <input type="text"
                           class="bg-gray-100 w-full rounded-md py-2 pl-5 pr-3 shadow-sm focus:outline-none focus:border-sky-500 focus:ring-sky-500 focus:ring-1 font-semibold">
                </div>
                <div class="my-2 mt-8">
                    <div class="my-2">
                        <span class="text-sm">Nama calon siswa/i</span>
                        <input type="text"
                               class="bg-gray-100 w-full rounded-md py-2 pl-5 pr-3 shadow-sm focus:outline-none focus:border-sky-500 focus:ring-sky-500 focus:ring-1 font-semibold">
                    </div>
                </div>
                <div class="my-2">
                    <span class="text-sm">Area kunjungan</span>
                    <div class="grid grid-cols-1 md:grid-cols-4 mt-3 mb-5">
                        <div class="mx-0.5">
                            <input type="checkbox" class="appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer text-black">
                            <span class="text-sm">Happy Holy Kids</span>
                        </div>
                        <div class="mx-0.5">
                            <input type="checkbox" class="appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-red-600 checked:border-red-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer text-black">
                            <span class="text-sm">SDK Harapan Bangsa</span>
                        </div>
                        <div class="mx-0.5">
                            <input type="checkbox" class="appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-purple-600 checked:border-purple-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer text-black">
                            <span class="text-sm">SMPK Harapan Bangsa</span>
                        </div>
                        <div class="mx-0.5">
                            <input type="checkbox" class="appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-green-600 checked:border-green-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer text-black">
                            <span class="text-sm">SMAK Harapan Bangsa</span>
                        </div>
                    </div>
                </div>
                <div class="my-2">
                    <div class="my-2">
                        <span class="text-sm">Tingkat pendidikan saat ini</span>
                        <input type="text"
                               class="bg-gray-100 w-full rounded-md py-2 pl-5 pr-3 shadow-sm focus:outline-none focus:border-sky-500 focus:ring-sky-500 focus:ring-1 font-semibold">
                    </div>
                </div>
                <div class="my-2">
                    <div class="my-2">
                        <span class="text-sm">Tanggal kunjungan</span>
                        <input type="datetime-local"
                               class="bg-gray-100 w-full rounded-md py-2 pl-5 pr-3 shadow-sm focus:outline-none focus:border-sky-500 focus:ring-sky-500 focus:ring-1 font-semibold">
                    </div>
                </div>
                <div class="my-5">
                    <button class="w-full rounded-xl text-lg py-2 text-white font-bold bg-amber-400 hover:bg-amber-500">
                        Kirim Pesan
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection
