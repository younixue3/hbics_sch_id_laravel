<?php

namespace App\Http\Controllers\Dashboard\Data;

use App\Http\Controllers\Controller;
use App\Models\Fasilitas;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

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

    public function update_data($request, $id)
    {
        dd($request->fileupload->getClientOriginalName());
        $filename = Str::random(40);
        $fasilitas = new Fasilitas();
    }
}
