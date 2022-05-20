<?php

namespace App\Http\Controllers\Dashboard\Data;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MailboxController extends Controller
{
    public function get_data()
    {
        $mailbox = Komunitas::where('connection', $data)->paginate(30);
        $compact = compact('mailbox');
        return $compact;
    }

    public function sent_mail()
    {

    }
}
