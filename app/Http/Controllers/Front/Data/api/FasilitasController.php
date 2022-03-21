<?php

namespace App\Http\Controllers\Front\Data\api;

use App\Http\Controllers\Controller;
use App\Models\Fasilitas;
use Illuminate\Http\Request;

class FasilitasController extends Controller
{
    public function getFasilitas()
    {
        return response(Fasilitas::get()->take(6));
    }

    public function getFasilitasAll()
    {
        return response(Fasilitas::get());
    }
}
