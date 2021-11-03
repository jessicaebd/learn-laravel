@extends('layouts.main')

@section('container')
    <h3>SIGNAL's Events</h3>

    @foreach ($eventList as $event)
        <br>
        <h5><a href="/events/{{ $event->slug }}">{{ $event->name }}</a></h5>
        <p>Held by {{ $event->by_division }} and led by {{ $event->leader }}</p>
        {{ $event->exerpt }}
        <br>
    @endforeach
@endsection