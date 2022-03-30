<?php

namespace App\Http\Controllers\Front\Data;

use App\Helper\getUrl;
use App\Http\Controllers\Controller;
use App\Models\Publikasis;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function get_data()
    {
        $prestasi = Publikasis::get()->take(6);
        $alumni = Publikasis::get()->take(6);
        $compact = compact('prestasi', 'alumni');
        return $compact;
    }
}
