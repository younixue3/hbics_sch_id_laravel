<?php

namespace App\Http\Controllers\Dashboard\Data;

use App\Http\Controllers\Controller;
use App\Models\Fasilitas;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Helper\getFilename;
use Illuminate\Support\Facades\Storage;

class FasilitasController extends Controller
{
    public function get_data()
    {
        return Fasilitas::latest()->paginate(12);
    }

    public function store_data($request)
    {
        $fasilitas = New Fasilitas();
        if ($request->fileupload != null) {
            $filename = getFilename::getFilename($request);
            Storage::disk('upload')->putFileAs('fasilitas_assets', $request->fileupload , $filename['filename']);
            $fasilitas->name = $filename['filename'];
            $fasilitas->type = $filename['type'];
        };
        $fasilitas->area = $request->area;
        return $fasilitas->save();
    }

    public function update_data($request, $id)
    {
        $fasilitas = Fasilitas::findOrFail($id);
        if ($request->fileupload != null) {
            $filename = getFilename::getFilename($request);
            Storage::disk('upload')->putFileAs('fasilitas_assets', $request->fileupload , $filename['filename']);
            $fasilitas->name = $filename['filename'];
            $fasilitas->type = $filename['type'];
        };
        $fasilitas->area = $request->area;
        return $fasilitas->save();
    }

    public function destroy_data($id)
    {
        return Fasilitas::find($id)->delete();
    }
}
