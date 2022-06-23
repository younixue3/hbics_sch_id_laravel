<?php

namespace App\Helper;

use App\Models\Pages;

class getUrl
{
    public function __construct()
    {
        return new getUrl();
    }

    public static function getUrl()
    {
        $url = [
            'home' => route('home'),
            'tentang-kami' => route('tentang-kami'),
            'hubungi-kami' => route('hubungi-kami'),
            'pendaftaran' => route('pendaftaran'),
            'petunjuk-pendaftaran' => route('petunjuk-pendaftaran'),
            'program-beasiswa' => route('program-beasiswa'),
            'pendaftaran-siswa-baru' => route('pendaftaran-siswa-baru'),
            'kunjungi-kami' => route('kunjungi-kami'),
            'akademis' => route('akademis'),
            'alumni' => route('alumni', ''),
            'orang-tua' => route('orang-tua'),
            'berita' => route('berita'),
            'acara' => route('acara'),
            'artikel' => route('artikel'),
//            'kelompok-bermain-taman-kanak-kanak' => route('kelompok-bermain-taman-kanak-kanak'),
//            'sekolah-dasar' => route('sekolah-dasar'),
//            'sekolah-menengah-pertama' => route('sekolah-menengah-pertama'),
//            'sekolah-menengah-atas' => route('sekolah-menengah-atas'),
            'dashboard' => route('dashboard.index'),
            'teacher-staff' => route('teacher-staff', ''),
            'filosofi-pendidikan' => route('filosofi-pendidikan'),
            'sejarah' => route('sejarah'),
            'visi-misi' => route('visi-misi'),
            'metode-pembelajaran' => route('metode-pembelajaran'),
            'fasilitas' => route('fasilitas'),
            'prestasi' => route('prestasi'),
        ];
        foreach (Pages::get() as $key => $value) {
            $url[$value->url] = route($value->url, $value->id);
        }
        return response($url);

    }
}
