<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        return view('events', [
            "title" => "Events",
            "eventList" => Event::all()
        ]);
    }

    public function show($slug) 
    {
        return view('event',[
            "title" => "Single Event",
            "event" => Event::find($slug)
        ]);
    }
}
