@extends('layouts.master')
@section('title', 'Pendaftaran Siswa Baru')
@section('content')
    <div class="bg-pattern pt-72 pb-10 text-center">
        <h1 id="hero_section" class="mb-20 text-5xl font-bold text-blue-900">Pendaftaran Siswa Baru</h1>
        <div class="flex">
            <div class="m-auto w-[65rem] px-10">
                <div class="bg-white rounded-3xl shadow-xl p-5">
                    <h2 class="md:text-xl font-bold md:mx-10">Berikut ini adalah persyaratan pendaftaran Happy Holy Kids
                        dan Sekolah Kristen Harapan Bangsa Balikpapan yang WAJIB dilengkapi :</h2>
                    <ul class="my-5 list-disc list-inside">
                        <li>Fotokopi Kartu Tanda Penduduk (KTP) Orang Tua</li>
                        <li>Fotokopi Kartu Keluarga (KK)</li>
                        <li>Fotokopi Akta Kelahiran Anak</li>
                        <li>Pasfoto Orang Tua ukuran 3x4cm (background polos warna bebas)</li>
                        <li>Pasfoto Anak ukuran 3x4cm (background polos warna bebas)</li>
                    </ul>
                    <div
                        class="font-light italic bg-yellow-200 rounded-xl h-full md:h-6 sm:hover:h-24 transition-all ease-in-out overflow-hidden">
                        <div>
                            Apabila siswa/i adalah pindahan dari sekolah lain, harap menyiapkan berkas tambahan berikut:
                        </div>
                        <ul class=" list-disc list-inside">
                            <li>Fotokopi rapor terakhir</li>
                            <li>Fotokopi Ijazah legalisir</li>
                            <li>Surat pindah</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
