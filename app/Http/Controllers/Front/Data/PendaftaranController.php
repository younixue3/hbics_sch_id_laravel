<?php

namespace App\Http\Controllers\Front\Data;

use App\Http\Controllers\Controller;
use App\Models\Kunjungans;
use App\Models\Mailbox;
use Illuminate\Http\Request;

class PendaftaranController extends Controller
{
    public function insert_kunjungan($request)
    {
        $kunjungan = Kunjungans::create([
            'name' => $request->name,
            'email' => $request->email,
            'alamat' => $request->alamat,
            'kota_kab' => $request->kota_kab,
            'negara' => $request->negara,
            'telepon' => $request->telepon,
            'nama_calon_siswa' => $request->nama_calon_siswa,
            'area_kunjungan' => $request->area_kunjungan,
            'tinkat_pendidikan' => $request->tinkat_pendidikan,
            'tanggal_kunjungan' => $request->tanggal_kunjungan
        ]);
        $mailbox = Mailbox::create([
            'kunjungan' => $kunjungan->id
        ]);
    }
}
