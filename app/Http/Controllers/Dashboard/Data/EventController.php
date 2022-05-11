<?php

namespace App\Http\Controllers\dashboard\Data;

use App\Http\Controllers\Controller;
use App\Models\Events;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function get_data()
    {
        $events = Events::paginate(12);
        $compact = compact('events');
        return $compact;
    }
}
