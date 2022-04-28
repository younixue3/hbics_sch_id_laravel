<?php

namespace App\Http\Controllers\Dashboard\Data;

use App\Helper\getFilename;
use App\Http\Controllers\Controller;
use App\Models\Contents;
use App\Models\Kategoris;
use App\Models\Publikasis;
use App\Models\PublikasisContents;
use App\Models\PublikasisKategoris;
use App\Models\UsersPublikasisCreated;
use App\Models\UsersPublikasisUpdated;
use Illuminate\Support\Facades\Storage;
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
        if ($request->inputFile1 !== null) {
            $publikasi = Publikasis::create([
                'randKey' => Str::random(8),
                'title' => $request->title0,
                'thumbnail' => $request->inputFile1->getClientOriginalName(),
                'type' => $request->inputFile1->extension() === 'mp4' ? 'video' : 'img'
            ]);
        } else {
            $publikasi = Publikasis::create([
                'randKey' => Str::random(8),
                'title' => $request->title0,
            ]);
        }

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
        if ($request->selectcategory !== '[object Object]') {
            foreach (json_decode($request->selectcategory) as $value) {
                $userRole = new PublikasisKategoris();
                $userRole->publikasi = $publikasi->id;
                $userRole->kategori = $value->id;
                $userRole->save();
            }
        }
        if($request->inputFile1 !== null) {
//            dd('masuk');
//        dd($i = 1 > intval($request->totalfile));
            for ($i = 1; $i <= intval($request->totalfile);) {
                if ($request['inputFile'.$i] !== null) {
//                    dd('dalam');
                    Storage::disk('upload')->putFileAs('foto_content', $request['inputFile'.$i], $request['inputFile'.$i]->getClientOriginalName());

                }
                $i++;
            }
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

    public function update_data($request, $key)
    {
//        dd($request);
        $publikasi = Publikasis::where('randKey', $key);

        if ($request->inputFile1 !== null) {
            if ($request->status !== null) {
                $publikasi->update([
                    'title' => $request->title0,
                    'thumbnail' => $request->inputFile1->getClientOriginalName(),
                    'type' => $request->inputFile1->extension() === 'mp4' ? 'video' : 'img',
                    'status' => $request->status
                ]);
            } else {
                $publikasi->update([
                    'title' => $request->title0,
                    'thumbnail' => $request->inputFile1->getClientOriginalName(),
                    'type' => $request->inputFile1->extension() === 'mp4' ? 'video' : 'img'
                ]);
            }
        } else {
            if ($request->status !== null) {
                $publikasi->update([
                    'title' => $request->title0,
                    'status' => $request->status
                ]);
            } else {
                $publikasi->update([
                    'title' => $request->title0
                ]);
            }
        }
        if ($publikasi->first()->publikasis_contents()->first()->content()->first()->item !== $request->item) {
            $content = Contents::create([
                'item' => $request->item
            ]);
            PublikasisContents::where('publikasi', $publikasi->first()->id)->delete();
            $publikasi_content = PublikasisContents::create([
                'publikasi' => $publikasi->first()->id,
                'content' => $content->id
            ]);
            $user_publikasi = UsersPublikasisUpdated::create([
                'user' => auth()->user()->id,
                'publikasi' => $publikasi->first()->id
            ]);
        }
        if ($request->selectcategory !== '[object Object]') {
            PublikasisKategoris::where('publikasi', $publikasi->first()->id)->delete();
            foreach (json_decode($request->selectcategory) as $value) {
                $userRole = new PublikasisKategoris();
                $userRole->publikasi = $publikasi->first()->id;
                $userRole->kategori = $value->id;
                $userRole->save();
            }
        }
        for ($i = 1; $i <= intval($request->totalfile);) {
            if ($request['inputFile'.$i] !== null) {
//                    dd('masuk');
                Storage::disk('upload')->putFileAs('foto_content', $request['inputFile'.$i], $request['nameFile'.$i]);
            }
            $i++;
        }
    }
}
