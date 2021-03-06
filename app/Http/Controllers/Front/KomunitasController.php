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

    public function alumni($area)
    {
        $data = $this->data->get_data_alumni($area);
        return view('front.komunitas.alumni.index', $data);
    }

    public function orangTua()
    {
        $data = $this->data->get_data_orang_tua();
        return view('front.komunitas.orangtua.index', $data);
    }

    public function teacherStaff(Request $request, $area)
    {
        $data = $this->data->get_teacher_staff_data($request, $area);
        return view('front.komunitas.teacherstaff.index', $data);
    }
}
