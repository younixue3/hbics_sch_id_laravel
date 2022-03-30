<?php

namespace App\Http\Controllers\Front\Data\api;

use App\Http\Controllers\Controller;
use App\Models\Prestasis;
use Illuminate\Http\Request;

class AkademisController extends Controller
{
    public function get_prestasi_hhk()
    {
        return response(Prestasis::where('area', 'hhk')->get()->take(6));
    }

    public function get_prestasi_sdk()
    {
        return response(Prestasis::where('area', 'sd')->get()->take(6));
    }

    public function get_prestasi_smpk()
    {
        return response(Prestasis::where('area', 'smp')->get()->take(6));
    }

    public function get_prestasi_smak()
    {
        return response(Prestasis::where('area', 'sma')->get()->take(6));
    }
}
