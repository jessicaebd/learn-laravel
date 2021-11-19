<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::latest();

        if (request('search')) {
            $events->where('name', 'like', '%' . request('search') . '%')
                ->orWhere('description', 'like', '%' . request('search') . '%');
        }

        return view('events.index', [
            "title" => "Events",
            "eventList" => $events->get()

        ]);
    }

    public function show(Event $event)
    {
        return view('events.single-event', [
            "title" => "Single Event",
            "eventList" => $event
        ]);
    }
}
