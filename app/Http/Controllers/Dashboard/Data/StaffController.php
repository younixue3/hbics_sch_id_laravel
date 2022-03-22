<?php

namespace App\Http\Controllers\Dashboard\Data;

use App\Helper\getFilename;
use App\Http\Controllers\Controller;
use App\Models\Fasilitas;
use App\Models\FotoProfile;
use App\Models\Roles;
use App\Models\User;
use App\Models\UsersRoles;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class StaffController extends Controller
{
    public function get_data()
    {
        $user = User::get();
        $role = json_encode(Roles::get());
        $compact = compact('user', 'role');
        return $compact;
//        return dd(User::find(1)->roles_user()->first()->roles()->first());
    }

    public function store_data($request)
    {
//        dd($request);
        $user = User::create([
            'randKey' => Str::random(40) . '_' . $request->name,
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password
        ]);
        if ($request->fileupload != null) {
            $foto_profile = new FotoProfile();
            $filename = getFilename::getFilename($request);
            Storage::disk('upload')->putFileAs('foto_profile', $request->fileupload, $filename['filename']);
            $foto_profile->img = $filename['filename'];
            $foto_profile->user = $user->id;
            $foto_profile->save();
        };
    }

    public function show_data($key)
    {
        return User::findOrFail('randKey', $key);
    }
}
