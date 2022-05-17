<?php

namespace App\Mail;

use App\Models\Audiences;
use App\Models\Events;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class HbicsMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($key, $audience)
    {
        $this->key = $key;
        $this->audience = $audience;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $event = Events::find($this->key);
        $audience = Audiences::find($this->audience);
        $url = $event->url;
        $compact = compact('event', 'audience', 'url');
////        dd($compact);
//        Mail::to('ricko.caesar@')->send('emails.eventValidation', $compact, function($massage) use ($compact){
//            $massage->to($compact['audience']->email)->subject($compact['event']->title);
//        });

        return $this->subject('HBICS Event: '.$event->title)->markdown('emails.eventValidation', $compact);
    }
}
