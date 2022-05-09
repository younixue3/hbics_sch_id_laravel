<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\Front\Data\AkademisController as DataController;

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

    public function kelompokBermainTk()
    {
        return view('front.akademis.hhk.index');
    }

    public function sekolahDasar()
    {
        return view('front.akademis.sd.index');
    }

    public function sekolahMenengahPertama()
    {
        return view('front.akademis.smp.index');
    }

    public function sekolahMenengahAtas()
    {
        return view('front.akademis.sma.index');
    }

    public function prestasiSiswa(Request $request)
    {
        $data = $this->data->get_prestasi($request);
        return view('front.akademis.prestasi.index', $data);
    }
}
