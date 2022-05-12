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
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build($key, $audience)
    {
        $event = Events::find($key);
        $audience = Audiences::find($audience);
        $compact = compact('event', 'audience');
//        dd($compact);
//        Mail::send('emails.eventValidation');
        return view('emails.eventValidation', $compact);
    }
}
