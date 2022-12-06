<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Beasiswa;
use App\Models\PentujukPendaftaran;
use Illuminate\Http\Request;
use App\Http\Controllers\Front\Data\PendaftaranController as DataController;

class PendaftaranController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(DataController $data)
    {
        $this->data = $data;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('front.pendaftaran.index');
    }

    public function petunjukPendaftaran()
    {

        $petunjuk_pendaftaran_hhk = json_encode(PentujukPendaftaran::where('type', 'hhk')->get());
        $petunjuk_pendaftaran_sd = json_encode(PentujukPendaftaran::where('type', 'sd')->get());
        $petunjuk_pendaftaran_smp = json_encode(PentujukPendaftaran::where('type', 'smp')->get());
        $petunjuk_pendaftaran_sma = json_encode(PentujukPendaftaran::where('type', 'sma')->get());
        $compact = compact('petunjuk_pendaftaran_hhk', 'petunjuk_pendaftaran_sd', 'petunjuk_pendaftaran_smp', 'petunjuk_pendaftaran_sma');
        return view('front.pendaftaran.petunjukPendaftaran.index', $compact);
    }

    public function programBeasiswa()
    {
        $beasiswa = Beasiswa::all();
        $compact = compact('beasiswa');
        return view('front.pendaftaran.programBeasiswa.index', $compact);
    }

    public function pendaftaranSiswaBaru()
    {
        return view('front.pendaftaran.pendaftaranSiswaBaru.index');
    }

    public function kunjungiKami()
    {
        return view('front.pendaftaran.kunjungiKami.index');
    }

    public function sent_kunjungan(Request $request)
    {
        $kunjungan = $this->data->insert_kunjungan($request);
        return redirect()->back();
    }
}
