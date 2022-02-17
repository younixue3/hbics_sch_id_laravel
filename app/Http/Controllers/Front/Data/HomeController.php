<?php

namespace App\Http\Controllers\Front\Data;

use App\Helper\getUrl;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function get_data()
    {
        $url = getUrl::getUrl();
        $data = compact('url');
        return $data;
    }
}
