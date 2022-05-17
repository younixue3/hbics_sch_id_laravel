<?php

namespace App\Http\Controllers\Mail;

use App\Http\Controllers\Controller;
use App\Mail\HbicsMail;
use App\Models\Audiences;
use App\Models\EventsAudiences;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function index($key, $audience)
    {
//        return new \App\Mail\HbicsMail(1, 1);
        $email_audience = Audiences::find($audience);
        $event_audience = EventsAudiences::where('event', $key)->where('audience', $audience)->first();
        $event_audience->validated = true;
        $event_audience->save();
        Mail::to($email_audience->email)->send(new \App\Mail\HbicsMail($key, $audience));
        return redirect()->back()->with('success', 'Email telah dikirim');
    }
}
