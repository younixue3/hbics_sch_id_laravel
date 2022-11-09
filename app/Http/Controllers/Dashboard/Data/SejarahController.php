<?php

namespace App\Http\Controllers\Dashboard\Data;

use App\Http\Controllers\Controller;
use App\Models\Sejarah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SejarahController extends Controller
{
    public function get_data()
    {
        $pages = Sejarah::all()->last();
        $compact = compact('pages');
        return $compact;
    }

    public function store_data($request)
    {
//        dd($request);
        $pages = new Sejarah();
        $pages->item = $request->item;
        if ($request->inputFile1 !== null) {
//            dd('masuk');
//        dd($i = 1 > intval($request->totalfile));
            for ($i = 1; $i <= intval($request->totalfile);) {
                if ($request['inputFile' . $i] !== null) {
                    Storage::disk('upload')->putFileAs('foto_content', $request['inputFile' . $i], $request['nameFile' . $i]);
                }
                $i++;
            }
        }
        $pages->save();
    }//
}
