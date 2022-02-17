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
            'hubungi-kami' => route('hubungi-kami')
        ];
        return json_encode($url, JSON_UNESCAPED_SLASHES);
    }
}
