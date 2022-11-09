<?php

namespace App\Http\Controllers\Front;

use App\Helper\getUrl;
use App\Http\Controllers\Controller;
use App\Models\FilosofiKarya;
use App\Models\Sejarah;
use App\Models\VisiMisi;
use Illuminate\Http\Request;
use App\Http\Controllers\Front\Data\TentangKamiController as DataController;

class TentangKamiController extends Controller
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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('front.tentangKami.index');
    }

    public function sejarah()
    {
        $pages = Sejarah::all()->last();
        $compact = compact('pages');
        return view('front.tentangKami.sejarah.index', $compact);
    }

    public function visiMisi()
    {
        $pages = VisiMisi::all()->last();
        $compact = compact('pages');
        return view('front.tentangKami.visiMisi.index', $compact);
    }


    public function filosofiPendidikan()
    {
        $pages = FilosofiKarya::all()->last();
        $compact = compact('pages');
        return view('front.tentangKami.filosofiPendidikan.index', $compact);
    }

    public function metodePembelajaran()
    {
        return view('front.tentangKami.metodePembelajaran.index');
    }

    public function fasilitas()
    {
        return view('front.tentangKami.fasilitas.index');
    }

}
