<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class ActivityController extends Controller
{
    public function activity($id, Request $request)
    {
//        return view(dd($request->activity));
        if ($request->activity = 'active') {
            User::find($id)->update([
                'last_activity' => null
            ]);
        } else {
            User::find($id)->update([
                'last_activity' => now()
            ]);
        }
    }
}
