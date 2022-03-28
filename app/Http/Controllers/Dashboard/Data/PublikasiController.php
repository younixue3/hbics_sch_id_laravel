<?php

namespace App\Http\Controllers\Dashboard\Data;

use App\Http\Controllers\Controller;
use App\Models\Contents;
use App\Models\Kategoris;
use App\Models\Publikasis;
use App\Models\PublikasisContents;
use App\Models\PublikasisKategoris;
use App\Models\UsersPublikasisCreated;
use Illuminate\Support\Str;

class PublikasiController extends Controller
{
    public function get_data($request)
    {
        $publikasis = Publikasis::paginate(15);
        $compact = compact('publikasis');
        return $compact;
    }

    public function store_data($request)
    {
//        dd($request);
        $publikasi = Publikasis::create([
            'randKey' => Str::random(8),
            'title' => $request->title0,
        ]);
        $user_publikasi = UsersPublikasisCreated::create([
            'user' => auth()->user()->id,
            'publikasi' => $publikasi->id
        ]);
        $content = Contents::create([
            'item' => $request->item
        ]);
        $publikasi_content = PublikasisContents::create([
            'publikasi' => $publikasi->id,
            'content' => $content->id
        ]);
        foreach (json_decode($request->selectcategory) as $value) {
            $userRole = new PublikasisKategoris();
            $userRole->publikasi = $publikasi->id;
            $userRole->kategori = $value->id;
            $userRole->save();
        }
    }

    public function destroy_data($key)
    {
        return Publikasis::where('randKey', $key)->delete();
    }

    public function edit_data($key)
    {
        $publikasi = Publikasis::where('randKey', $key)->firstOrFail();
        $category = Kategoris::get();
        $compact = compact('publikasi', 'category');

        return $compact;
    }
}
