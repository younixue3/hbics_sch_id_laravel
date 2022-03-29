<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Kategoris;
use App\Models\Publikasis;
use Illuminate\Http\Request;
use App\Http\Controllers\Dashboard\Data\PublikasiController as DataController;

class PublikasiController extends Controller
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
        $data = $this->data->get_data($request);
        return view('dashboard.publikasi.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Kategoris::get();
        $compact = compact('category');
        return view('dashboard.publikasi.add', $compact);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        foreach ($request->files as $key => $value) {
            $request->validate([
               $key  => 'mimes:jpeg,jpg,webp,png', 'dimensions: max_width = 2464, max_height = 2464', 'max: 50'
            ]);
        }
        $data = $this->data->store_data($request);
        return redirect(route('dashboard.publikasi.index'))->with('success', 'Insert Data Successfully');
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
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($key)
    {
        $data = $this->data->edit_data($key);
        return view('dashboard.publikasi.edit', $data);
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
        foreach ($request->files as $index => $value) {
            $request->validate([
                $index  => 'mimes:jpeg,jpg,webp,png', 'dimensions: max_width = 2464, max_height = 2464', 'max: 50'
            ]);
        }
        $data = $this->data->update_data($request, $key);
        return redirect(route('dashboard.publikasi.index'))->with('success', 'Update Data Successfully');
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
        return redirect(route('dashboard.publikasi.index'))->with('success', 'Delete Data Successfully');
    }
}
