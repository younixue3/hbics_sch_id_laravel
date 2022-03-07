@extends('layouts.master')
@section('title', 'Happy Holy Kids Balikpapan')
@section('content')
    <div>
        <div id="hero_section" class="h-[35rem] bg-fixed bg-no-repeat bg-cover flex bg-center" style="background-image: url('{{asset('assets/stock_photo_rdev/cambridge.jpeg')}}')">
            <div class="m-auto w-full h-full text-center text-white flex relative backdrop-brightness-75">
                <div class="mx-auto mt-auto mb-20">
                    <h1 class="text-2xl md:text-6xl font-bold uppercase">
                        Happy Holy Kids Balikpapan
                    </h1>
                </div>
            </div>
        </div>
        <div class="bg-pattern">
            <div class="flex">
                <div class="px-10 py-10 text-center text-lg">
                    Happy Holy Kids sendiri merupakan satu-satunya di Kalimantan Timur dan Yayasan Tunas Cahaya Bangsa adalah satu-satunya sekolah yang mendapatkan perjanjian eksklusif dengan Happy Holy Kids pusat yang berada di Jakarta. Happy Holy Kids berdiri pada tanggal 17 Juli 2006. Kurikulum Happy Holy Kids menggunakan pendekatan saintifik dengan beragam sentra pembelajaran. Sentra dirancang sebagai tempat dimana anak-anak belajar.  Mereka mengeksplorasi lingkungan mereka melalui proses pembelajaran lewat permainan. Happy Holy Kids juga memiliki program karya wisata di mana anak-anak dapat belajar dunia di sekitar mereka lebih dekat dengan mengalaminya.
                </div>
            </div>
            <div class="text-center">
                <h2 class="text-3xl font-bold">Pembelajaran Happy Holy Kids sebagai TK Terbaik Balikpapan</h2>
                <div class="grid grid-cols-1 grid-rows-3 md:grid-cols-2 md:grid-rows-2 gap-5 py-10 px-5 md:px-20">
                    <div class="flex justify-self-end">
                        <div class="bg-white m-auto md:w-96 rounded-xl shadow-xl p-5 transform hover:scale-105 transition-all ease-in-out duration-500">
                            <h4 class="text-xl font-bold"> Sentra Belajar :</h4>
                            <ul>
                                <li>Sentra Balok</li>
                                <li>Sentra Bermain Peran</li>
                                <li>Sentra Persiapan</li>
                                <li>Sentra Alama</li>
                                <li>Sentra Seni</li>
                                <li>Sentra Mulok English</li>
                                <li>Sentra Mulok Mandarin</li>
                            </ul>
                        </div>
                    </div>
                    <div class="flex justify-self-start">
                        <div class="bg-white m-auto md:w-96 rounded-xl shadow-xl p-5 transform hover:scale-105 transition-all ease-in-out duration-500">
                            <h4 class="text-xl font-bold"> Sentra Belajar :</h4>
                            <ul><span class="font-bold">Kelompok Bermain</span>
                                <li>Sesi Pagi 08.00 - 10.30</li>
                                <li>Sesi Siang 11.00 - 13.30</li>
                            </ul>
                            <ul><span class="font-bold">Taman Kanak-kanak</span>
                                <li>Sesi Pagi 08.00 - 10.30</li>
                                <li>Sesi Siang 11.00 - 13.30</li>
                            </ul>
                        </div>
                    </div>
                    <div class="md:col-span-2 flex">
                        <div class="bg-white m-auto md:w-96 rounded-xl shadow-xl p-5 transform hover:scale-105 transition-all ease-in-out duration-500">
                            <h4 class="text-xl font-bold"> Ekstrakurikuler :</h4>
                            <ul>
                                <li>Keyboard</li>
                                <li>Art & Craft</li>
                                <li>Drawing & Coloring</li>
                                <li>English</li>
                                <li>Vocal</li>
                                <li>Dance</li>
                                <li>Obstacle</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center">
                <h2 class="text-3xl font-bold">Prestasi Happy Holy Kids sebagai TK Favorit Balikpapan</h2>
                <snap-alumni-component></snap-alumni-component>
            </div>
        </div>
    </div>
@endsection
