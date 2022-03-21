<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Fasilitas;
use Illuminate\Http\Request;
use App\Http\Controllers\Dashboard\Data\FasilitasController as DataController;


class FasilitasController extends Controller
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

        $compact = compact('data');

        return view('dashboard.fasilitas.index', $compact);
    }

    /**
     * Show the fasilitas for creating a new resource.
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
            'fileupload' => ['mimes:jpeg,jpg,webp,png,mp4', 'dimensions: max_width = 2464, max_height = 2464', 'max: 5000'],
            'area' => ['required']
        ]);
        $data = $this->data->store_data($request);
        return redirect(route('dashboard.fasilitas.index'))->with('success', 'Insert Data Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the fasilitas for editing the specified resource.
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
            'fileupload' => ['mimes:jpeg,jpg,webp,png,mp4', 'dimensions: max_width = 2464, max_height = 2464', 'max: 5000']
        ]);
        $data = $this->data->update_data($request, $id);
        return redirect(route('dashboard.fasilitas.index'))->with('success', 'Update Data Successfully');
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
        return redirect(route('dashboard.fasilitas.index'))->with('success', 'Delete Data Successfully');
    }
}
