<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\Dashboard\Data\StaffController as DataController;

class StaffController extends Controller
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
    public function index(Request $request)
    {
        $data = $this->data->get_data();
        return view('dashboard.staff.index', $data);
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
            'fileupload' => ['required', 'mimes:jpeg,jpg,webp,png', 'dimensions: max_width = 2464, max_height = 2464', 'max: 5000'],
            'name' => ['required', 'max: 60'],
            'email' => 'email',
            'password' => ['required', 'confirmed', 'min:8'],
        ]);
        $data = $this->data->store_data($request);
        return redirect(route('dashboard.staff.index'))->with('success', 'Insert Data Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($key)
    {
        $data = $this->data->show_data($key);
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
    public function update(Request $request, $key)
    {
        if ($request->password !== null) {
            $validator = $request->validate([
                'password' => ['required', 'confirmed', 'min:8'],
            ]);
        } elseif ($request->is_super_admin !== null) {
            $validator = $request->validate([
                'is_super_admin' => ['required'],
            ]);
        } else {
            $validator = $request->validate([
                'fileupload' => ['mimes:jpeg,jpg,webp,png', 'dimensions: max_width = 2464, max_height = 2464', 'max: 5000'],
                'name' => ['required', 'max: 60'],
                'email' => 'email',
            ]);
        }

        $data = $this->data->update_data($request, $key);
        return redirect(route('dashboard.staff.index'))->with('success', 'Update Data Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($key)
    {
        $data = $this->data->destroy_data($key);
        return redirect(route('dashboard.staff.index'))->with('success', 'Delete Data Successfully');
    }
}
