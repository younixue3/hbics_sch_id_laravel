<?php

namespace App\Http\Controllers\Dashboard\Data;

use App\Http\Controllers\Controller;
use App\Models\Prestasis;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Helper\getFilename;

class PrestasiController extends Controller
{
    public function get_data()
    {
        $prestasis = Prestasis::paginate(20);
        $compact = compact('prestasis');
        return $compact;
    }

    public function store_data($request)
    {
        $prestasi = new Prestasis();
        if ($request->fileupload != null) {
            $filename = getFilename::getFilename($request);
            Storage::disk('upload')->putFileAs('foto_siswa', $request->fileupload, $filename['filename']);
            $prestasi->picture = $filename['filename'];
        };
        $prestasi->name = $request->name;
        $prestasi->prestasi = $request->prestasi;
        $prestasi->detail_prestasi = $request->detail_prestasi;
        $prestasi->area = $request->area;
        $prestasi->save();
    }

    public function show_data($id)
    {
        $prestasi = Prestasis::findOrFail($id);
        $compact = compact('prestasi');
        return $compact;
    }

    public function update_data($request, $id)
    {
        $prestasi = Prestasis::findOrFail($id);
        $prestasi->name = $request->name;
        $prestasi->prestasi = $request->prestasi;
        $prestasi->detail_prestasi = $request->detail_prestasi;
        if ($request->area !== null) {
            $prestasi->area = $request->area;
        }
        if ($request->fileupload != null) {
            $filename = getFilename::getFilename($request);
            Storage::disk('upload')->putFileAs('foto_siswa', $request->fileupload, $filename['filename']);
            $prestasi->picture = $filename['filename'];
        };
        $prestasi->save();
    }

    public function destroy_data($id)
    {
        return Prestasis::findOrFail($id)->delete();
    }
}
