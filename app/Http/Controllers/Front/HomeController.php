<?php

namespace App\Http\Controllers\Front;

use App\Helper\getUrl;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\Front\Data\HomeController as DataController;

class HomeController extends Controller
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
        return view('front.index');
    }
}
