<?php

namespace App\Http\Controllers\Mail;

use App\Http\Controllers\Controller;
use App\Mail\HbicsMail;
use App\Mail\HbicsMailbox;
use App\Models\Audiences;
use App\Models\EventsAudiences;
use App\Models\Mailbox;
use App\Models\MailboxSents;
use App\Models\Sents;
use App\Models\SentsStaffs;
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

    public function mailbox(Request $request, $id)
    {
//        dd($request);
        $mailbox = Mailbox::find($id);
        if ($mailbox->kunjungan !== null) {
            $sent = Sents::create([
                'message' => $request->sent
            ]);
            $sentstaff = SentsStaffs::create([
                'sent' => $sent->id,
                'staff' => auth()->user()->id
            ]);
            $mailboxsent = MailboxSents::create([
                'mailbox' => $mailbox->id,
                'sent' => $sent->id
            ]);
            Mail::to($mailbox->kunjungan()->email)->send(new \App\Mail\HbicsMailbox($sent->message, 'Kunjungan dari '.$mailbox->kunjungan()->name));
            return redirect()->back();
        } else {
            $to = json_decode($mailbox->content);
            $sent = Sents::create([
                'message' => $request->sent
            ]);
            $sentstaff = SentsStaffs::create([
                'sent' => $sent->id,
                'staff' => auth()->user()->id
            ]);
            $mailboxsent = MailboxSents::create([
                'mailbox' => $mailbox->id,
                'sent' => $sent->id
            ]);
            Mail::to($to->items->email)->send(new \App\Mail\HbicsMailbox($sent->message, 'Pesan Dari '.$to->items->name));
            return redirect()->back();
        }
    }
}
