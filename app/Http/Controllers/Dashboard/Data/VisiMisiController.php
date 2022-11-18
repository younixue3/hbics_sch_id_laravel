<?php

namespace App\Http\Controllers\Dashboard\Data;

use App\Http\Controllers\Controller;
use App\Models\VisiMisi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class VisiMisiController extends Controller
{
    public function get_data()
    {
        $pages = VisiMisi::all()->last();
        $compact = compact('pages');
        return $compact;
    }

    public function store_data($request)
    {
//        dd($request);
        $pages = new VisiMisi();
        $pages->content = $request->item;
        if ($request->totalfile !== null) {
            for ($i = 1; $i <= intval($request->totalfile);) {
//                dd($request);
                if ($request['inputFile' . $i] !== null) {
                    Storage::disk('upload')->putFileAs('foto_content', $request['inputFile' . $i], $request['nameFile' . $i]);
                }
                $i++;
            }
        }
        $pages->save();
    }//
}
