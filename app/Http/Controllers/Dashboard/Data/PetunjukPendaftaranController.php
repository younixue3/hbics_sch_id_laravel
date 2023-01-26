<?php

namespace App\Http\Controllers\Dashboard\Data;

use App\Http\Controllers\Controller;
use App\Models\PentujukPendaftaran;
use Illuminate\Http\Request;

class PetunjukPendaftaranController extends Controller
{
    public function get_data()
    {
        $petunjuk_pendaftaran_hhk = PentujukPendaftaran::where('type', 'hhk')->paginate(20);
        $petunjuk_pendaftaran_sd = PentujukPendaftaran::where('type', 'sd')->paginate(20);
        $petunjuk_pendaftaran_smp = PentujukPendaftaran::where('type', 'smp')->paginate(20);
        $petunjuk_pendaftaran_sma = PentujukPendaftaran::where('type', 'sma')->paginate(20);
        $compact = compact('petunjuk_pendaftaran_hhk', 'petunjuk_pendaftaran_sd', 'petunjuk_pendaftaran_smp', 'petunjuk_pendaftaran_sma');
        return $compact;
    }

    public function store_data($request)
    {
//        dd($request);
        $petunjuk_pendaftaran = new PentujukPendaftaran();
        $petunjuk_pendaftaran->judul = $request->title;
        $petunjuk_pendaftaran->isi = $request->content;
        $petunjuk_pendaftaran->type = $request->type;
        $petunjuk_pendaftaran->save();
    }

    public function show_data($id)
    {
        $petuntuk_pendaftaran = PentujukPendaftaran::findOrFail($id);
        $compact = compact('petuntuk_pendaftaran');
        return $compact;
    }

    public function update_data($request, $id)
    {
        $petunjuk_pendaftaran = PentujukPendaftaran::find($id);
        $petunjuk_pendaftaran->judul = $request->title;
        $petunjuk_pendaftaran->isi = $request->content;
        $petunjuk_pendaftaran->type = $request->type;
        $petunjuk_pendaftaran->save();
    }

    public function destroy_data($id)
    {
        return PentujukPendaftaran::findOrFail($id)->delete();
    }
}
