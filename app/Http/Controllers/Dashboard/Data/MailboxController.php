<?php

namespace App\Http\Controllers\Dashboard\Data;

use App\Http\Controllers\Controller;
use App\Models\Mailbox;
use Illuminate\Http\Request;

class MailboxController extends Controller
{
    public function get_data()
    {
        $mailbox = Mailbox::paginate(10);
//        dd($mailbox->mailboxsents_mailbox()->sents_mailboxsents()->staffs_sentsstaffs(), $mailbox->mailboxsents_mailbox()->sents_mailboxsents()->sent_sentsstaffs());
        $compact = compact('mailbox');
        return $compact;
    }

    public function show_sent_mail($id)
    {
//        $mailbox = Mailbox::find($id)->mailboxsents_mailbox()->sents_mailboxsents()->sent_sentsstaffs();
        $data_mailbox = [];
        $mailbox = Mailbox::find($id)->mailboxsents_mailbox();
        foreach ($mailbox as $key => $value) {
            array_push($data_mailbox, [
                'name' => $value->sents_mailboxsents()->staffs_sentsstaffs()->name,
                'email' => $value->sents_mailboxsents()->staffs_sentsstaffs()->email,
                'date' => $value->created_at,
                'message' => $value->sents_mailboxsents()->sent_sentsstaffs()->message
            ]);
        };
        $compact = compact('data_mailbox');
        return $compact;
    }
}
