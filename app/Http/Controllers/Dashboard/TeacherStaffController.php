<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\Dashboard\Data\TeacherStaffController as DataController;

class TeacherStaffController extends Controller
{

    public function __construct(DataController $data)
    {
        $this->data = $data;
        $this->middleware(['admin']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = $this->data->get_data();
        return view('dashboard.teacherstaff.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = $request->validate([
            'fileupload' => ['mimes:jpeg,jpg,webp,png', 'dimensions: max_width = 2464, max_height = 2464', 'max: 5000'],
            'first_name' => ['required', 'max: 60'],
            'last_name' => ['required', 'max: 60'],
            'area' => ['required'],
            'profesi' => ['required'],
            'email' => 'email',
        ]);
        $data = $this->data->store_data($request);
        return redirect(route('dashboard.teacher_staff.index'))->with('success', 'Insert Data Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = $this->data->show_data($id);
        return response($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = $request->validate([
            'fileupload' => ['mimes:jpeg,jpg,webp,png', 'dimensions: max_width = 2464, max_height = 2464', 'max: 5000'],
            'first_name' => ['required', 'max: 60'],
            'last_name' => ['required', 'max: 60'],
            'profesi' => ['required'],
            'email' => 'email',
        ]);

        $data = $this->data->update_data($request, $id);
        return redirect(route('dashboard.teacher_staff.index'))->with('success', 'Update Data Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = $this->data->destroy_data($id);
        return redirect(route('dashboard.teacher_staff.index'))->with('success', 'Delete Data Successfully');
    }
}
