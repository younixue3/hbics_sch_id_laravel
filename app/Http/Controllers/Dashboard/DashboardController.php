<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\Dashboard\Data\DashboardController as DataController;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function __construct(DataController $data)
    {
        $this->data = $data;
    }

    public function index()
    {
        $dashboard = $this->data->get_data_dashboard();
        return view('dashboard.index', $dashboard);
    }
}
