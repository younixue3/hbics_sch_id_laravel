<?php

namespace App\Http\Controllers\Front\Data\api;

use App\Http\Controllers\Controller;
use App\Models\Komunitas;
use Illuminate\Http\Request;

class KomunitasController extends Controller
{
    public function get_data_hero_alumni()
    {
        return response(Komunitas::where('connection', 'alumni')->get()->take(5));
    }

    public function get_data_orang_tua()
    {
        return response(Komunitas::where('connection', 'orang_tua')->get()->take(5));
    }

    public function getTeacherStaffAll($request)
    {
        return response(Komunitas::where('connection', 'orang_tua')->paginate(12));
    }
}
