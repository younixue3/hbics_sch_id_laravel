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
        $data = $this->data->get_data_hhk();
        return view('front.akademis.hhk.index', $data);
    }

    public function sekolahDasar()
    {
        $data = $this->data->get_data_hhk();
        return view('front.akademis.sd.index', $data);
    }

    public function sekolahMenengahPertama()
    {
        $data = $this->data->get_data_hhk();
        return view('front.akademis.smp.index', $data);
    }

    public function sekolahMenengahAtas()
    {
        $data = $this->data->get_data_hhk();
        return view('front.akademis.sma.index', $data);
    }
}
