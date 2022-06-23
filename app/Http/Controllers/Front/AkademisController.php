<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\Front\Data\AkademisController as DataController;
use App\Models\Pages;

class AkademisController extends Controller
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
        return view('front.akademis.index');
    }

    public function pages($id)
    {
        $page = $this->data->get_data_hhk($id);
        return view('front.akademis.hhk.index', $page);
    }

//    public function sekolahDasar()
//    {
//        $page = $this->data->get_data_sdk();
//        return view('front.akademis.sd.index');
//    }
//
//    public function sekolahMenengahPertama()
//    {
//        $page = $this->data->get_data_smpk();
//        return view('front.akademis.smp.index');
//    }
//
//    public function sekolahMenengahAtas()
//    {
//        $page = $this->data->get_data_smak();
//        return view('front.akademis.sma.index');
//    }

    public function prestasiSiswa(Request $request)
    {
        $data = $this->data->get_prestasi($request);
        return view('front.akademis.prestasi.index', $data);
    }
}
