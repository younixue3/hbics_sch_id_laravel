<?php

namespace App\Http\Controllers\Front;

use App\Helper\getUrl;
use App\Http\Controllers\Controller;
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
        $datas = $this->data->get_data();
        return view('front.tentangKami.index', $datas);
    }

    public function sejarah()
    {
        return view('front.tentangKami.sejarah.index');
    }

    public function visiMisi()
    {
        return view('front.tentangKami.visiMisi.index');
    }


    public function filosofiPendidikan()
    {
        return view('front.tentangKami.filosofiPendidikan.index');
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
