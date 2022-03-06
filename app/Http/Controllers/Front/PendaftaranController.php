<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\Front\Data\PendaftaranController as DataController;

class PendaftaranController extends Controller
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
        return view('front.pendaftaran.index');
    }

    public function kunjungiKami()
    {
        return view('front.pendaftaran.kunjungiKami.index');
    }
}
