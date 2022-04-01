<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\Front\Data\PublikasiController as DataController;

class PublikasiController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(DataController $data)
    {
        $this->data = $data;
    }

    public function berita()
    {
        $data = $this->data->get_data_berita();
        return view('front.publikasi.berita.index', $data);
    }

    public function acara()
    {
        $data = $this->data->get_data_acara();
        return view('front.publikasi.acara.index', $data);
    }

    public function artikel()
    {
        $data = $this->data->get_data_artikel();
        return view('front.publikasi.artikel.index', $data);
    }

    public function show($key)
    {
        $data = $this->data->show_data($key);
        return view('front.publikasi.show', $data);
    }
}
