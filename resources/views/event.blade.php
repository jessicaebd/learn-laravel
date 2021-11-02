@extends('layouts.main')

@section('container')
    <article>
        <h1>{{ $eventList->name }}</h1>
    </article>
    <br>
    <p>Held by {{ $eventList->by_division }} and led by {{ $eventList->leader }}</p>
    {{ $eventList->description }}
    <br> <br>
    <a href="/events">Back to Events</a>
@endsection