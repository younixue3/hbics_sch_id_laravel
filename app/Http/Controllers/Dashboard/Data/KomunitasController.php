<?php

namespace App\Http\Controllers\Dashboard\Data;

use App\Http\Controllers\Controller;
use App\Models\Komunitas;
use Illuminate\Http\Request;
use App\Helper\getFilename;
use Illuminate\Support\Facades\Storage;

class KomunitasController extends Controller
{
    public function get_data($data)
    {
        $komunitas = Komunitas::where('connection', $data)->paginate(20);
        $compact = compact('komunitas');
        return $compact;
    }

    public function store_data($request)
    {
        $komunitas = new Komunitas();
        if ($request->fileupload != null) {
            $filename = getFilename::getFilename($request);
            Storage::disk('upload')->putFileAs('foto_komunitas', $request->fileupload, $filename['filename']);
            $komunitas->picture = $filename['filename'];
        };
        $komunitas->name = $request->name;
        $komunitas->status = $request->status;
        $komunitas->pesan = $request->pesan;
        $komunitas->area = $request->area;
        $komunitas->connection = $request->connection;
        $komunitas->save();
    }

    public function show_data($id)
    {
        $komunitas = Komunitas::findOrFail($id);
        $compact = compact('komunitas');
        return $compact;
    }

    public function update_data($request, $id)
    {
//        dd($request);
        $komunitas = Komunitas::findOrFail($id);
        if ($request->fileupload != null) {
            $filename = getFilename::getFilename($request);
            Storage::disk('upload')->putFileAs('foto_komunitas', $request->fileupload, $filename['filename']);
            $komunitas->picture = $filename['filename'];
        };
        $komunitas->name = $request->name;
        $komunitas->status = $request->status;
        $komunitas->pesan = $request->pesan;
        if ($request->area != null) {
            $komunitas->area = $request->area;
        }
        if ($request->connection != null) {
            $komunitas->connection = $request->connection;
        }
        $komunitas->save();
    }

    public function destroy_data($id)
    {
        return Komunitas::findOrFail($id)->delete();
    }
}
