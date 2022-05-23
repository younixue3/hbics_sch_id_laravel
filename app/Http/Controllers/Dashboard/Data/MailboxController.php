<?php

namespace App\Http\Controllers\Dashboard\Data;

use App\Http\Controllers\Controller;
use App\Models\Mailbox;
use Illuminate\Http\Request;

class MailboxController extends Controller
{
    public function get_data()
    {
        $mailbox = Mailbox::get();
//        dd($mailbox->mailboxsents_mailbox()->sents_mailboxsents()->staffs_sentsstaffs(), $mailbox->mailboxsents_mailbox()->sents_mailboxsents()->sent_sentsstaffs());
        $compact = compact('mailbox');
        return $compact;
    }

    public function sent_mail()
    {

    }
}
