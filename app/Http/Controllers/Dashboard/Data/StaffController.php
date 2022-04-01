<?php

namespace App\Http\Controllers\Dashboard\Data;

use App\Helper\getFilename;
use App\Http\Controllers\Controller;
use App\Models\Fasilitas;
use App\Models\FotoProfile;
use App\Models\Roles;
use App\Models\User;
use App\Models\UsersRoles;
use Database\Seeders\UsersRolesSeeder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Testing\Fluent\Concerns\Has;

class StaffController extends Controller
{
    public function get_data()
    {
        $user = User::paginate(20);
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
            'area' => $request->area,
            'password' => Hash::make($request->password),
            'is_super_admin' => $request->is_super_admin === 'on'
        ]);
        if ($request->fileupload != null) {
            $foto_profile = new FotoProfile();
            $filename = getFilename::getFilename($request);
            Storage::disk('upload')->putFileAs('foto_profile', $request->fileupload, $filename['filename']);
            $foto_profile->img = $filename['filename'];
            $foto_profile->user = $user->id;
            $foto_profile->save();
        };
        foreach (json_decode($request->selectrole) as $value) {
            $userRole = new UsersRoles();
            $userRole->user = $user->id;
            $userRole->role = $value->id;
            $userRole->save();
        }
    }

    public function update_data($request, $key)
    {
//        $user = User::where('randKey', $key)->first();
//        dd(UsersRoles::where('user', $user->id)->restore());
        if ($request->password !== null) {
            $user = User::where('randKey', $key)->update([
                'password' => Hash::make($request->password)
            ]);
        } else {

            $user = User::where('randKey', $key);

            if ($request->fileupload != null) {
                $filename = getFilename::getFilename($request);
                Storage::disk('upload')->putFileAs('foto_profile', $request->fileupload, $filename['filename']);
                $foto_profile = FotoProfile::where('user', $user->first()->id)->update([
                    'img' => $filename['filename'],
                ]);
            };
            if($request->selectrole !== '[object Object]') {
                UsersRoles::where('user', $user->first()->id)->delete();
                foreach (json_decode($request->selectrole) as $value) {
                    $userRole = new UsersRoles();
                    $userRole->user = $user->first()->id;
                    $userRole->role = $value->id;
                    $userRole->save();
                }
            }
            if ($request->is_super_admin === 'false') {
                $user = User::where('randKey', $key)->update([
                    'is_super_admin' => false
                ]);
            } elseif ($request->is_super_admin === 'on') {
                $user = User::where('randKey', $key)->update([
                    'is_super_admin' => $request->is_super_admin === 'on'
                ]);
            } else {
                $user->update([
                    'randKey' => Str::random(40) . '_' . $request->name,
                    'name' => $request->name,
                    'email' => $request->email,
                ]);
            }
            if ($request->area !== null) {
                $user = User::where('randKey', $key)->update([
                    'area' => $request->area,
                ]);
            }
        }
    }

    public function show_data($key)
    {
//        dd($key);
        $arrrolesuser = [];
        $user = User::where('randKey', $key)->firstOrFail();
        $roles_user = $user->roles_user();
        foreach ($roles_user as $item) {
            array_push($arrrolesuser, ['name' => $item->roles()->name]);
        }
        $compact = compact('user', 'arrrolesuser');
        return $compact;
    }

    public function destroy_data($key)
    {
        return User::where('randKey', $key)->delete();
    }
}
