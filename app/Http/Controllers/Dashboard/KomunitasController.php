<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\Dashboard\Data\KomunitasController as DataController;

class KomunitasController extends Controller
{
    public function __construct(DataController $data)
    {
        $this->data = $data;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = $this->data->get_data();
        return view('dashboard.komunitas.index', $data);
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
            'name' => ['required', 'max: 60'],
            'status' => ['required'],
            'pesan' => ['required'],
            'area' => ['required'],
            'connection' => ['required'],
        ]);
        $data = $this->data->store_data($request);
        return redirect(route('dashboard.komunitas.index'))->with('success', 'Insert Data Successfully');
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
            'name' => ['required', 'max: 60'],
            'status' => ['required'],
            'pesan' => ['required'],
        ]);

        $data = $this->data->update_data($request, $id);
        return redirect(route('dashboard.komunitas.index'))->with('success', 'Update Data Successfully');
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
        return redirect(route('dashboard.komunitas.index'))->with('success', 'Delete Data Successfully');
    }
}
