@extends('layouts.front.master')
@section('title', 'Happy Holy Kids Balikpapan')
@section('content')
    <div>
        <div id="hero_section" class="h-[35rem] bg-fixed bg-no-repeat bg-cover flex bg-center"
             style="background-image: url('{{asset('assets/stock_photo_rdev/cambridge.webp')}}')">
            <div class="m-auto w-full h-full text-center text-white flex relative backdrop-brightness-75">
                <div class="mx-auto mt-auto mb-20">
                    <h1 class="text-2xl md:text-6xl font-bold uppercase">
                        Happy Holy Kids Balikpapan
                    </h1>
                </div>
            </div>
        </div>
        <div class="bg-akademis bg-no-repeat bg-left pb-5">
            <div class="flex">
                <div class="px-10 py-10 text-center text-lg">
                    Happy Holy Kids sendiri merupakan satu-satunya di Kalimantan Timur dan Yayasan Tunas Cahaya Bangsa
                    adalah satu-satunya sekolah yang mendapatkan perjanjian eksklusif dengan Happy Holy Kids pusat yang
                    berada di Jakarta. Happy Holy Kids berdiri pada tanggal 17 Juli 2006. Kurikulum Happy Holy Kids
                    menggunakan pendekatan saintifik dengan beragam sentra pembelajaran. Sentra dirancang sebagai tempat
                    dimana anak-anak belajar. Mereka mengeksplorasi lingkungan mereka melalui proses pembelajaran lewat
                    permainan. Happy Holy Kids juga memiliki program karya wisata di mana anak-anak dapat belajar dunia
                    di sekitar mereka lebih dekat dengan mengalaminya.
                </div>
            </div>
            <div class="text-center mx-20">
                <accordion-component></accordion-component>
            </div>
            <div class="text-center">
                <h2 class="text-3xl font-bold">Prestasi Happy Holy Kids sebagai TK Favorit Balikpapan</h2>
                <snap-alumni-component area="{{route('api.getTestimoniHhk')}}"></snap-alumni-component>
            </div>
        </div>
    </div>
@endsection
