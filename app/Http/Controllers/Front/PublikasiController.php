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
}
