<?php

namespace App\Helper;

class getUrlDashboard
{
    public function __construct()
    {
        return new getUrl();
    }

    public static function getUrl()
    {
        $url = [
            'home' => route('home'),
            'dashboard' => route('dashboard.index'),
            'fasilitas' => route('dashboard.fasilitas.index'),
            'komunitas' => route('dashboard.komunitas.index'),
            'prestasi' => route('dashboard.prestasi.index'),
            'publikasi' => route('dashboard.publikasi.index'),
            'staff' => route('dashboard.staff.index'),
        ];
        return response($url);
    }
}
