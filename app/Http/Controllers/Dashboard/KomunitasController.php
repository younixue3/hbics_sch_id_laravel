<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\Dashboard\Data\KomunitasController as DataController;

class KomunitasController extends Controller
{
    public function __construct(DataController $data)
    {
        $this->data = $data;
    }
}
