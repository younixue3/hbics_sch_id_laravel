<?php

namespace App\Http\Controllers\Dashboard\Data;

use App\Http\Controllers\Controller;
use App\Models\FilosofiKarya;
use Illuminate\Http\Request;

class FilosofiKaryaController extends Controller
{
    public function get_data()
    {
        $pages = FilosofiKarya::all()->last();
        $compact = compact('pages');
        return $compact;
    }

    public function store_data($request)
    {
        $pages = new FilosofiKarya();
        $pages->paragraph = $request->paragraph;
        $pages->markup_paragraph = $request->markup_paragraph;
        $pages->save();
    }
}
