@extends('layouts.master')
@section('title', 'SMA Kristen Harapan Bangsa')
@section('content')
    <div>
        <div id="hero_section" class="h-[35rem] bg-fixed bg-no-repeat bg-cover flex bg-center" style="background-image: url('{{asset('assets/stock_photo_rdev/cambridge.jpeg')}}')">
            <div class="m-auto w-full h-full text-center text-white flex relative backdrop-brightness-75">
                <div class="mx-auto mt-auto mb-20">
                    <h1 class="text-2xl md:text-6xl font-bold uppercase">
                        SMA Kristen Harapan Bangsa Balikpapan
                    </h1>
                </div>
            </div>
        </div>
        <div class="bg-pattern">
            <div class="flex">
                <div class="px-10 py-10 text-center text-lg">
                    SMA Harapan Bangsa sebagai SMA kristen unggulan Balikpapan juga menggunakan kurikulum Hybrid dimana kurikulum Nasional diperkaya dengan kurikulum Cambridge. Selama belajar di tingkat SMA, seluruh peserta didik harus memiliki akses, pengetahuan dan pengalaman dalam belajar lebih banyak dibandingkan tingkat sebelumnya. Pada tingkat ini, siswa/i didorong untuk memiliki kemampuan abad 21. Kemampuan ini untuk membantu siswa/i menghadapi masa depan. Kami mempersiapkan siswa/i untuk memasuki lingkungan kuliah dan kesempatan menjadi tenaga profesional ahli di masa depan. Siswa/i Sekolah Menengah Atas Harapan Bangsa Balikpapan memiliki kesempatan terlibat dalam masyarakat melalui program Live-In di mana mereka dapat mengalami nilai hidup dan menjadi bagian sebagai pemberi solusi yang berdampak bagi masyarakat.
                </div>
            </div>
            <div class="text-center">
                <h2 class="text-3xl font-bold">Pembelajaran Sekolah Kristen Harapan Bangsa Balikpapan, sebagai SMA Terbaik Balikpapan</h2>
                <div class="grid grid-cols-1 grid-rows-3 md:grid-cols-2 md:grid-rows-2 gap-5 py-10 px-5 md:px-20">
                    <div class="flex justify-self-end">
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
                    <div class="flex">
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
                    <div class="md:col-span-2 flex place-self-start justify-self-center">
                        <div class="bg-white m-auto md:w-96 rounded-xl shadow-xl p-5 transform hover:scale-105 transition-all ease-in-out duration-500">
                            <h4 class="text-xl font-bold"> Jam Kegiatan Belajar Mengajar :</h4>
                            <ul>
                                <li>Senin - Jum'at 08.00 - 10.45</li>
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
