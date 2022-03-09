<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\Dashboard\Data\GalleryController as DataController;

class GalleryController extends Controller
{
    public function __construct(DataController $data)
    {
        $this->data = $data;
    }
}
