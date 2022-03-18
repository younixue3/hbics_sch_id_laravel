<?php

namespace App\Http\Controllers\Dashboard\Data;

use App\Http\Controllers\Controller;
use App\Models\Fasilitas;
use Illuminate\Http\Request;

class FasilitasController extends Controller
{
    public function get_data()
    {
        return Fasilitas::latest()->get();
    }

    public function destroy_data($id)
    {
        return Fasilitas::find($id)->delete();
    }
}
