@extends('layouts.front.master')
@section('title', 'SD Kristen Harapan Bangsa')
@section('content')
    <div>
        <div id="hero_section" class="h-[35rem] bg-fixed bg-no-repeat bg-cover flex bg-center"
             style="background-image: url('{{asset('assets/stock_photo_rdev/cambridge.webp')}}')">
            <div class="m-auto w-full h-full text-center text-white flex relative backdrop-brightness-75">
                <div class="mx-auto mt-auto mb-20">
                    <h1 class="text-2xl md:text-6xl font-bold uppercase">
                        SD Kristen Harapan Bangsa Balikpapan
                    </h1>
                </div>
            </div>
        </div>
        <div class="bg-akademis bg-no-repeat bg-left pb-5">
            <div class="flex">
                <div class="px-10 py-10 text-center text-lg">
                    Sekolah Dasar Harapan Bangsa sebagai SMA Kristen unggulan Balikpapan menggunakan kurikulum Nasional
                    (K-13) dan diperkaya dengan kurikulum internasional Cambridge untuk Bahasa Inggris. Peserta didik
                    tidak hanya diajarkan untuk mengerti pelajaran tetapi juga untuk bertumbuh dan berpikir kritis sejak
                    dini. Guru menyampaikan pembelajaran dengan cara yang menyenangkan dimana peserta mungkin melalui
                    eksperimen dan program karya wisata. Peserta didik juga diperkenalkan dengan berbagai profesi untuk
                    memperkenalkan kepada mereka berbagai jenis profesi dan untuk bermimpi besar. Program dinamakan
                    Career Fair. Program lainnya adalah Kidspreneurship dimana peserta didik dilatih dan dipersiapkan
                    untuk menjadi wirausahawan di masa depan. Sejak tingkat Sekolah Dasar, peserta didik belajar dengan
                    cara yang menyenangkan supaya peserta didik menikmati masa kecil mereka dengan bahagia dan
                    mendapatkan ilmu yang berharga untuk tingkat berikutnya.
                </div>
            </div>
            <div class="text-center mx-20">
                <workspace-pages-output-function editmode="true" fetchdata="{{$page->latest()->first()->item}}"></workspace-pages-output-function>
            </div>
            <div class="text-center">
                <h2 class="text-3xl font-bold">Prestasi Happy Holy Kids sebagai TK Favorit Balikpapan</h2>
                <snap-alumni-component area="{{route('api.getTestimoniSdk')}}"></snap-alumni-component>
            </div>
        </div>
    </div>
@endsection
