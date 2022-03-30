<?php

namespace App\Http\Controllers\Front\Data\api;

use App\Http\Controllers\Controller;
use App\Models\Komunitas;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function getTestimoni()
    {
        return response(Komunitas::where('connection', 'orang_tua')->get());
    }
}
