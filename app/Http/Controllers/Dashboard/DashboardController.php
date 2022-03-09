<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\Dashboard\Data\DashboardController as DataController;

class DashboardController extends Controller
{
    public function __construct(DataController $data)
    {
        $this->data = $data;
    }

    public function index()
    {
        return view('dashboard.index');
    }
}
