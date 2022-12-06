<?php

namespace App\Http\Controllers\Dashboard\Data;

use App\Http\Controllers\Controller;
use App\Models\Beasiswa;
use Illuminate\Http\Request;

class BeasiswaController extends Controller
{
    public function get_data()
    {
        $beasiswa = Beasiswa::paginate(20);
        $compact = compact('beasiswa');
        return $compact;
    }

    public function store_data($request)
    {
//        dd($request);
        $beasiswa = new Beasiswa();
        $beasiswa->title = $request->title;
        $beasiswa->content = $request->content;
        $beasiswa->save();
    }

    public function show_data($id)
    {
        $beasiswa = Beasiswa::findOrFail($id);
        $compact = compact('beasiswa');
        return $compact;
    }

    public function update_data($request, $id)
    {
        $beasiswa = Beasiswa::find($id);
        $beasiswa->title = $request->title;
        $beasiswa->content = $request->content;
        $beasiswa->save();
    }

    public function destroy_data($id)
    {
        return Beasiswa::findOrFail($id)->delete();
    }
}
