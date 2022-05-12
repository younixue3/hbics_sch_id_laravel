<?php

namespace App\Http\Controllers\dashboard\Data;

use App\Http\Controllers\Controller;
use App\Models\Events;
use App\Models\EventsAudiences;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function get_data()
    {
        $events = Events::paginate(12);
        $compact = compact('events');
        return $compact;
    }

    public function edit_data($id)
    {
        $audiences = EventsAudiences::where('event', $id)->paginate(15);
        $event = Events::find($id);
        $compact = compact('audiences', 'event');
        return $compact;
    }
}
