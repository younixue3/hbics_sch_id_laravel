@extends('layouts.master')
@section('title', 'SD Kristen Harapan Bangsa')
@section('content')
    <div>
        <div id="hero_section" class="h-[35rem] bg-fixed bg-no-repeat bg-cover flex bg-center"
             style="background-image: url('{{asset('assets/stock_photo_rdev/cambridge.jpeg')}}')">
            <div class="m-auto w-full h-full text-center text-white flex relative backdrop-brightness-75">
                <div class="mx-auto mt-auto mb-20">
                    <h1 class="text-2xl md:text-6xl font-bold uppercase">
                        SD Kristen Harapan Bangsa Balikpapan
                    </h1>
                </div>
            </div>
        </div>
        <div class="bg-pattern">
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
            <div class="text-center">
                <h2 class="text-3xl font-bold">Pembelajaran di Sekolah Kristen Harapan Bangsa Balikpapan, sebagai SD
                    Terbaik Balikpapan</h2>
                <div class="grid grid-cols-1 grid-rows-3 md:grid-cols-2 md:grid-rows-2 gap-5 py-10 px-5 md:px-20">
                    <div class="flex justify-self-end">
                        <div
                            class="bg-white m-auto md:w-96 rounded-xl shadow-xl p-5 transform hover:scale-105 transition-all ease-in-out duration-500">
                            <h4 class="text-xl font-bold"> Mata pelajaran :</h4>
                            <ul>
                                <li>Matematika</li>
                                <li>Bahasa Inggris</li>
                                <li>Sains</li>
                                <li>Bahasa Indonesia</li>
                                <li>Seni Budaya dan Prakarya Agama</li>
                                <li>Tematik</li>
                                <li>Mandarin</li>
                                <li>ICT</li>
                                <li>Musik</li>
                                <li>PKLH</li>
                            </ul>
                        </div>
                    </div>
                    <div class="flex">
                        <div
                            class="bg-white m-auto md:w-96 rounded-xl shadow-xl p-5 transform hover:scale-105 transition-all ease-in-out duration-500">
                            <h4 class="text-xl font-bold"> Ekstrakurikuler :</h4>
                            <ul>
                                <li>Art & Craft (Kelas 1-6)</li>
                                <li>Dance (Kelas 1-6)</li>
                                <li>Drawing & Coloring (Kelas 1-6)</li>
                                <li>English (Kelas 1-6)</li>
                                <li>Singing / Vocal (Kelas 1-6)</li>
                                <li>German (Kelas 1-6)</li>
                                <li>Keyboard (Kelas 1-6)</li>
                                <li>Public Speaking (Kelas 1-6)</li>
                                <li>Robotic (Kelas 1-6)</li>
                                <li>Content Creator/Vlogging (Kelas 4-6)</li>
                                <li>Content Creator/Vlogging (Kelas 4-6)</li>
                                <li>Manga (Kelas 4-6)</li>
                                <li>Photography (Kelas 4-6)</li>
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
                <h2 class="text-3xl font-bold">Prestasi Happy Holy Kids sebagai TK Favorit Balikpapan</h2>
                <snap-alumni-component></snap-alumni-component>
            </div>
        </div>
    </div>
@endsection
