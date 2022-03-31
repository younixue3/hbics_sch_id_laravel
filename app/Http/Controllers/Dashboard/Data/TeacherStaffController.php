<?php

namespace App\Http\Controllers\Dashboard\Data;

use App\Helper\getFilename;
use App\Http\Controllers\Controller;
use App\Models\FotoProfile;
use App\Models\TeacherStaff;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TeacherStaffController extends Controller
{
    public function get_data()
    {
        $teacherstaff = TeacherStaff::paginate(20);
        $compact = compact('teacherstaff');
        return $compact;
    }

    public function store_data($request)
    {
        $teacherstaff = new TeacherStaff();
        if ($request->fileupload != null) {
            $filename = getFilename::getFilename($request);
            Storage::disk('upload')->putFileAs('foto_teacher_staff', $request->fileupload, $filename['filename']);
            $teacherstaff->picture = $filename['filename'];
        };
        $teacherstaff->first_name = $request->first_name;
        $teacherstaff->last_name = $request->last_name;
        $teacherstaff->email = $request->email;
        $teacherstaff->area = $request->area;
        $teacherstaff->profesi = $request->profesi;
        $teacherstaff->save();
    }

    public function show_data($id)
    {
        $teacherstaff = TeacherStaff::find($id)->firstOrFail();
        $compact = compact('teacherstaff');
        return $compact;
    }

    public function update_data($request, $id)
    {
        $teacherstaff = TeacherStaff::findOrFail($id);
        if ($request->fileupload != null) {
            $filename = getFilename::getFilename($request);
            Storage::disk('upload')->putFileAs('foto_teacher_staff', $request->fileupload, $filename['filename']);
            $teacherstaff->picture = $filename['filename'];
        };
        $teacherstaff->first_name = $request->first_name;
        $teacherstaff->last_name = $request->last_name;
        $teacherstaff->email = $request->email;
        $teacherstaff->profesi = $request->profesi;
        if ($request->area != null) {
            $teacherstaff->area = $request->area;
        }
        $teacherstaff->save();
    }

    public function destroy_data($id)
    {
        return TeacherStaff::findOrFail($id)->delete();
    }
}
