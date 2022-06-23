@extends('layouts.front.master')
@section('title', 'SMA Kristen Harapan Bangsa')
@section('content')
    <div>
        <div id="hero_section" class="h-[35rem] bg-fixed bg-no-repeat bg-cover flex bg-center"
             style="background-image: url('{{asset('assets/stock_photo_rdev/cambridge.webp')}}')">
            <div class="m-auto w-full h-full text-center text-white flex relative backdrop-brightness-75">
                <div class="mx-auto mt-auto mb-20">
                    <h1 class="text-2xl md:text-6xl font-bold uppercase">
                        SMA Kristen Harapan Bangsa Balikpapan
                    </h1>
                </div>
            </div>
        </div>
        <div class="bg-akademis bg-no-repeat bg-left pb-5">
            <div class="flex">
                <div class="px-10 py-10 text-center text-lg">
                    SMA Harapan Bangsa sebagai SMA kristen unggulan Balikpapan juga menggunakan kurikulum Hybrid dimana
                    kurikulum Nasional diperkaya dengan kurikulum Cambridge. Selama belajar di tingkat SMA, seluruh
                    peserta didik harus memiliki akses, pengetahuan dan pengalaman dalam belajar lebih banyak
                    dibandingkan tingkat sebelumnya. Pada tingkat ini, siswa/i didorong untuk memiliki kemampuan abad
                    21. Kemampuan ini untuk membantu siswa/i menghadapi masa depan. Kami mempersiapkan siswa/i untuk
                    memasuki lingkungan kuliah dan kesempatan menjadi tenaga profesional ahli di masa depan. Siswa/i
                    Sekolah Menengah Atas Harapan Bangsa Balikpapan memiliki kesempatan terlibat dalam masyarakat
                    melalui program Live-In di mana mereka dapat mengalami nilai hidup dan menjadi bagian sebagai
                    pemberi solusi yang berdampak bagi masyarakat.
                </div>
            </div>
            <div class="text-center mx-20">
                <workspace-pages-output-function editmode="true" fetchdata="{{$page->latest()->first()->item}}"></workspace-pages-output-function>
            </div>
            <div class="text-center">
                <h2 class="text-3xl font-bold">Prestasi Happy Holy Kids sebagai TK Favorit Balikpapan</h2>
                <snap-alumni-component area="{{route('api.getTestimoniSmak')}}"></snap-alumni-component>
            </div>
        </div>
    </div>
@endsection
