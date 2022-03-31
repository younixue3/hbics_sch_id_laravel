<?php

namespace App\Http\Controllers\Dashboard\Data;

use App\Http\Controllers\Controller;
use App\Models\TeacherStaff;
use Illuminate\Http\Request;

class TeacherStaffController extends Controller
{
    public function get_data()
    {
        $teacherstaff = TeacherStaff::paginate(20);
        $compact = compact('teacherstaff');
        return $compact;
    }
}
