<?php

namespace App\Http\Controllers\Front\Data;

use App\Helper\getUrl;
use App\Http\Controllers\Controller;
use App\Models\Mailbox;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HubungiKamiController extends Controller
{
    public function __construct()
    {
        $this->url = getUrl::getUrl();
    }

    public function get_data()
    {
        $url = $this->url;
        $data = compact('url');
        return $data;
    }

    public function insert_message($request)
    {
        $mailbox = Mailbox::create([
           'content' => json_encode(['items' => [
               'name' => $request->name,
               'email' => $request->email,
               'message' => $request->message
           ]])
        ]);
    }
}
