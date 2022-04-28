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
        $prestasi = Publikasis::where('status', 'publish')->get()->take(4);
        $alumni = Publikasis::where('status', 'publish')->get()->take(4);
        $compact = compact('prestasi', 'alumni');
        return $compact;
    }
}
