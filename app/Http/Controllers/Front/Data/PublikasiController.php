<?php

namespace App\Http\Controllers\Front\Data;

use App\Http\Controllers\Controller;
use App\Models\Publikasis;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;

class PublikasiController extends Controller
{
    public function get_data_berita()
    {
        $berita = Publikasis::whereHas('kategoris_publikasi', function (Builder $query) {
            $query->where('kategori', 1);
        })->paginate(12);
        $cardberita = Publikasis::whereHas('kategoris_publikasi', function (Builder $query) {
            $query->where('kategori', 1);
        })->get()->take(4);
        $compact = compact('berita', 'cardberita');
        return $compact;
    }

    public function get_data_acara()
    {
        $acara = Publikasis::whereHas('kategoris_publikasi', function (Builder $query) {
            $query->where('kategori', 2);
        })->paginate(12);
        $cardacara = Publikasis::whereHas('kategoris_publikasi', function (Builder $query) {
            $query->where('kategori', 2);
        })->get()->take(4);
        $compact = compact('acara', 'cardacara');
        return $compact;
    }

    public function get_data_artikel()
    {
        $artikel = Publikasis::whereHas('kategoris_publikasi', function (Builder $query) {
            $query->where('kategori', 3);
        })->paginate(12);
        $cardartikel = Publikasis::whereHas('kategoris_publikasi', function (Builder $query) {
            $query->where('kategori', 3);
        })->get()->take(4);
        $compact = compact('artikel', 'cardartikel');
        return $compact;
    }

    public function show_data($key)
    {
        $cardpublikasi = Publikasis::where('randKey', '!=',$key)->get()->take(4);
        $publikasi = Publikasis::where('randKey', $key)->firstOrFail();
        $comment = $publikasi->publikasis_comments();
        $compact = compact('publikasi', 'cardpublikasi', 'comment');
        return $compact;
    }
}
