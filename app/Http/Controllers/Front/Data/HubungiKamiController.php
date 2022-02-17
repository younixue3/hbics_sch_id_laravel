<?php

namespace App\Http\Controllers\Front\Data;

use App\Helper\getUrl;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HubungiKamiController extends Controller
{
    public function __construct()
    {
        $this->url = getUrl::getUrl();
    }

    public function get_data()
    {
        $url = $this->url;
        $data = compact('url');
        return $data;
    }
}
