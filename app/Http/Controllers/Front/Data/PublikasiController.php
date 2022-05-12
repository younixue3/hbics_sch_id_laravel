<?php

namespace App\Http\Controllers\Front\Data;

use App\Http\Controllers\Controller;
use App\Models\Audiences;
use App\Models\Events;
use App\Models\EventsAudiences;
use App\Models\Publikasis;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;

class PublikasiController extends Controller
{
    public function get_data_berita()
    {
        $berita = Publikasis::where('status', 'publish')->whereHas('kategoris_publikasi', function (Builder $query) {
            $query->where('kategori', 1);
        })->paginate(12);
        $cardberita = Publikasis::where('status', 'publish')->whereHas('kategoris_publikasi', function (Builder $query) {
            $query->where('kategori', 1);
        })->get()->take(4);
        $compact = compact('berita', 'cardberita');
        return $compact;
    }

    public function get_data_acara()
    {
        $acara = Publikasis::where('status', 'publish')->whereHas('kategoris_publikasi', function (Builder $query) {
            $query->where('kategori', 2);
        })->paginate(12);
        $cardacara = Publikasis::where('status', 'publish')->whereHas('kategoris_publikasi', function (Builder $query) {
            $query->where('kategori', 2);
        })->get()->take(4);
        $compact = compact('acara', 'cardacara');
        return $compact;
    }

    public function get_data_artikel()
    {
        $artikel = Publikasis::where('status', 'publish')->whereHas('kategoris_publikasi', function (Builder $query) {
            $query->where('kategori', 3);
        })->paginate(12);
        $cardartikel = Publikasis::where('status', 'publish')->whereHas('kategoris_publikasi', function (Builder $query) {
            $query->where('kategori', 3);
        })->get()->take(4);
        $compact = compact('artikel', 'cardartikel');
        return $compact;
    }

    public function show_data($key)
    {
        $cardpublikasi = Publikasis::where('randKey', '!=', $key)->get()->take(4);
        $publikasi = Publikasis::where('randKey', $key)->firstOrFail();
        $comment = $publikasi->publikasis_comments();
        $compact = compact('publikasi', 'cardpublikasi', 'comment');
        return $compact;
    }

    public function register_event($request, $key)
    {
//        dd($key, $request);
        $audience = Audiences::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone_number' => $request->phone_number
        ]);
        EventsAudiences::create([
            'event' => Events::where('randKey', $key)->first()->id,
            'audience' => $audience->id
        ]);
    }
}
