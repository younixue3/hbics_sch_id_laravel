<?php

namespace App\Http\Controllers\Dashboard\Data;

use App\Http\Controllers\Controller;
use App\Models\Publikasis;
use Illuminate\Http\Request;

class PublikasiController extends Controller
{
    public function get_data($request)
    {
        $publikasis = Publikasis::paginate(15);
        $compact = compact('publikasis');
        return $compact;
    }
}
