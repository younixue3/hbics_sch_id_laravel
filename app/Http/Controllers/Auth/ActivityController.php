<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class ActivityController extends Controller
{
    public function activity($id, Request $request)
    {
        if ($request->activity === 'active') {
            return User::find($id)->update([
                'last_activity' => null
            ]);
        } else {
            return User::find($id)->update([
                'last_activity' => now()
            ]);
        }
    }
}
