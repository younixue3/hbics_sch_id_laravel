<?php

namespace App\Http\Controllers\Dashboard\Data;

use App\Http\Controllers\Controller;
use App\Models\Pages;
use App\Models\PagesContents;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function get_data()
    {
        $pages = Pages::get();
        $compact = compact('pages');
        return $compact;
    }

    public function get_content($id)
    {
        $content = Pages::find($id)->contents();
        $compact = compact('content', 'id');
        return $compact;
    }

    public function update_data($request, $id)
    {
        $page = Pages::find($id);
        PagesContents::create([
            'item' => $request->item,
            'page' => $page->id
        ]);
    }

    public function store_data($request, $page)
    {

    }
}
