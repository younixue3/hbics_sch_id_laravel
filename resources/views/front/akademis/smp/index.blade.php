@extends('layouts.front.master')
@section('title', 'SMP Kristen Harapan Bangsa')
@section('content')
    <div>
        <div id="hero_section" class="h-[35rem] bg-fixed bg-no-repeat bg-cover flex bg-center"
             style="background-image: url('{{asset('assets/stock_photo_rdev/cambridge.webp')}}')">
            <div class="m-auto w-full h-full text-center text-white flex relative backdrop-brightness-75">
                <div class="mx-auto mt-auto mb-20">
                    <h1 class="text-2xl md:text-6xl font-bold uppercase">
                        SMP Kristen Harapan Bangsa Balikpapan
                    </h1>
                </div>
            </div>
        </div>
        <div class="bg-akademis bg-no-repeat bg-left pb-5">
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
            <div class="text-center mx-20">
                <workspace-pages-output-function editmode="true" fetchdata="{{$page->latest()->first()->item}}"></workspace-pages-output-function>
            </div>
            <div class="text-center">
                <h2 class="text-3xl font-bold">Prestasi Sekolah Kristen Harapan Bangsa Balikpapan, sebagai SMP Favorit
                    Balikpapan</h2>
                <snap-alumni-component area="{{route('api.getTestimoniSmpk')}}"></snap-alumni-component>
            </div>
        </div>
    </div>
@endsection

