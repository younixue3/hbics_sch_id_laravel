<?php

namespace App\Http\Controllers\Front\Data;

use App\Http\Controllers\Controller;
use App\Models\Prestasis;
use Illuminate\Http\Request;

class AkademisController extends Controller
{
    public function get_data_hhk()
    {

    }

    public function get_data_sdk()
    {

    }

    public function get_data_smpk()
    {

    }

    public function get_data_smak()
    {

    }

    public function get_prestasi($request)
    {
//        dd($request);
        if ($request->area != null || $request->description != null) {
            $prestasi = Prestasis::where('area', $request->area)->orWhere('name', $request->description)->where('prestasi', $request->description)->paginate(12);
//            dd('masuk1');
        } else {
            $prestasi = Prestasis::paginate(12);
//            dd('masuk2');
        }
        $compact = compact('prestasi', 'request');
        return $compact;
    }
}
