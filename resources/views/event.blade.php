@extends('layouts.main')

@section('container')
    <article>
        <h1>{{ $eventList->name }}</h1>
    </article>
    <br>
    <p>Held by {{ $eventList->division->name }}</p>
    <p>Category <a href="/categories/{{ $eventList->category->slug }}">{{ $eventList->category->name }}</a></p>
    {{ $eventList->description }}
    <br> <br>
    <a href="/events">Back to Events</a>
@endsection