<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\Front\Data\KomunitasController as DataController;

class KomunitasController extends Controller
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

    public function alumni()
    {
        $data = $this->data->get_data_alumni();
        return view('front.komunitas.alumni.index', $data);
    }

    public function orangTua()
    {
        return view('front.komunitas.orangtua.index');
    }
}
