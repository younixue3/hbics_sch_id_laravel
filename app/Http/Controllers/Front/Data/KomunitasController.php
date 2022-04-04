<?php

namespace App\Http\Controllers\Front\Data;

use App\Http\Controllers\Controller;
use App\Models\Komunitas;
use App\Models\Publikasis;
use App\Models\TeacherStaff;
use Illuminate\Http\Request;

class KomunitasController extends Controller
{
    public function get_data_alumni()
    {
        $alumni = Komunitas::where('connection', 'alumni')->get()->take(15);
        $content = Publikasis::where('status', 'publish')->get()->take(6);
        $compact = compact('alumni', 'content');
        return $compact;
    }

    public function get_teacher_staff_data($request, $area)
    {
        if ($request->area === 'all') {
            $teacherstaff = TeacherStaff::paginate(12);
        } else {
            $teacherstaff = TeacherStaff::where('area', $area)->paginate(12);
        }

        $compact = compact('teacherstaff');

        return $compact;
    }
}
