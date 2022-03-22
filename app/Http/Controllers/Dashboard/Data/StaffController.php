<?php

namespace App\Http\Controllers\Dashboard\Data;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\UsersRoles;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    public function get_data()
    {
        return User::get();
//        return dd(User::find(1)->roles_user()->first()->roles()->first());
    }

    public function show_data($key)
    {
        return User::findOrFail('randKey', $key);
    }
}
