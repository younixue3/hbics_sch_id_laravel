<?php

namespace App\Http\Controllers\Mail;

use App\Http\Controllers\Controller;
use App\Mail\HbicsMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function index($key, $audience)
    {
        return new \App\Mail\HbicsMail($key, $audience);
//        Mail::to('ricko.caesar@hbics.sch.id')->send(new \App\Mail\HbicsMail($key, $audience));
//        return redirect()->back()->with('success', 'Email telah dikirim');
    }
}
