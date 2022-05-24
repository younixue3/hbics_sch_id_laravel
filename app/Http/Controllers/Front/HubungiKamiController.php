<?php

namespace App\Http\Controllers\Front;

use App\Helper\getUrl;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\Front\Data\HubungiKamiController as DataController;

class HubungiKamiController extends Controller
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
        return view('front.hubungiKami', $datas);
    }

    public function sent_message(Request $request)
    {
        $message = $this->data->insert_message($request);
        return redirect()->back();
    }
}
