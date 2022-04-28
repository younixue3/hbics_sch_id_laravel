<?php

namespace App\Http\Controllers\Front\Data;

use App\Http\Controllers\Controller;
use App\Models\Komunitas;
use App\Models\Publikasis;
use App\Models\TeacherStaff;
use Illuminate\Http\Request;

class KomunitasController extends Controller
{
    public function get_data_alumni($area)
    {
        if (!$area || $area === 'all') {
            $alumni = Komunitas::where('connection', 'alumni')->paginate(12);
        } else {
            $alumni = Komunitas::where('connection', 'alumni')->where('area', $area)->paginate(12);
        }
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
