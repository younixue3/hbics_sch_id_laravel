@extends('layouts.master')
@section('title', 'SMP Kristen Harapan Bangsa')
@section('content')
    <div>
        <div id="hero_section" class="h-[35rem] bg-fixed bg-no-repeat bg-cover flex bg-center"
             style="background-image: url('{{asset('assets/stock_photo_rdev/cambridge.jpeg')}}')">
            <div class="m-auto w-full h-full text-center text-white flex relative backdrop-brightness-75">
                <div class="mx-auto mt-auto mb-20">
                    <h1 class="text-2xl md:text-6xl font-bold uppercase">
                        SMP Kristen Harapan Bangsa Balikpapan
                    </h1>
                </div>
            </div>
        </div>
        <div class="bg-pattern">
            <div class="flex">
                <div class="px-10 py-10 text-center text-lg">
                    Sekolah Menengah Pertama Harapan Bangsa sebagai SMP Kristen unggulan Balikpapan menggunakan
                    kurikulum Cambridge. Dengan menggunakan kurikulum ini, kami mempersiapkan peserta didik untuk masa
                    depan, membantu mereka mengembangkan keingintahuan mereka, mendorong dan membantu minat mereka yang
                    besar untuk belajar dan menemukan kemampuan baru dan dunia dalam cakupan yang lebih luas. Pada
                    tingkatan ini, peserta didik melanjutkan untuk lebih memaksimalkan potensi mereka melalui karya
                    mereka di berbagai kegiatan seperti Kidspreneurship. Peserta didik dilatih dan dipersiapkan menjadi
                    pemimpin masa depan melalui program OSIS. Mereka diperkenalkan tentang kepemimpinan dan mengenal
                    diri dan potensi diri mereka sendiri lewat Teens Camp.
                </div>
            </div>
            <div class="text-center">
                <h2 class="text-3xl font-bold">Pembelajaran di Sekolah Kristen Harapan Bangsa Balikpapan, sebagai SMP
                    Terbaik Balikpapan</h2>
                <div class="grid grid-cols-1 grid-rows-3 md:grid-cols-2 md:grid-rows-2 gap-5 py-10 px-5 md:px-20">
                    <div class="flex justify-self-end">
                        <div
                            class="bg-white m-auto md:w-96 rounded-xl shadow-xl p-5 transform hover:scale-105 transition-all ease-in-out duration-500">
                            <h4 class="text-xl font-bold"> Mata Pelajaran :</h4>
                            <ul>
                                <li>Religion</li>
                                <li>Citizenship</li>
                                <li>Bahasa Indonesia</li>
                                <li>Mathematics</li>
                                <li>Science</li>
                                <li>Social Science</li>
                                <li>English</li>
                                <li>The Arts</li>
                                <li>Health and Physical Education</li>
                                <li>Mandarin</li>
                                <li>Information and Communication Technology</li>
                            </ul>
                        </div>
                    </div>
                    <div class="flex">
                        <div
                            class="bg-white m-auto md:w-96 rounded-xl shadow-xl p-5 transform hover:scale-105 transition-all ease-in-out duration-500">
                            <h4 class="text-xl font-bold"> Ekstrakurikuler :</h4>
                            <ul>
                                <li>Band</li>
                                <li>Coding</li>
                                <li>Cooking</li>
                                <li>Content Creator</li>
                                <li>Dance</li>
                                <li>Graphic Design</li>
                                <li>Ilustrasi</li>
                                <li>Merajut</li>
                                <li>Panahan</li>
                                <li>Public Speaking</li>
                                <li>Robotic</li>
                            </ul>
                        </div>
                    </div>
                    <div class="md:col-span-2 flex place-self-start justify-self-center">
                        <div
                            class="bg-white m-auto md:w-96 rounded-xl shadow-xl p-5 transform hover:scale-105 transition-all ease-in-out duration-500">
                            <h4 class="text-xl font-bold"> Jam Kegiatan Belajar Mengajar :</h4>
                            <ul>
                                <li>Senin - Jum'at 08.00 - 10.45</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center">
                <h2 class="text-3xl font-bold">Prestasi Sekolah Kristen Harapan Bangsa Balikpapan, sebagai SMP Favorit
                    Balikpapan</h2>
                <snap-alumni-component></snap-alumni-component>
            </div>
        </div>
    </div>
@endsection

