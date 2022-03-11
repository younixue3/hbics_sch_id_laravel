<?php

namespace App\Helper;

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
            'happy-holy-kids' => route('kelompok-bermain-tk'),
            'sekolah-dasar' => route('sekolah-dasar'),
            'sekolah-menengah-pertama' => route('sekolah-menengah-pertama'),
            'sekolah-menengah-atas' => route('sekolah-menengah-atas'),
            'alumni' => route('alumni'),
            'orang-tua' => route('orang-tua'),
            'berita' => route('berita'),
            'acara' => route('acara'),
            'artikel' => route('artikel'),
            'login' => route('login')
        ];
        return response($url);
    }
}
