@extends('layouts.main')

@section('container')
    <h1>Category: {{ $category }}</h1>

    @foreach ($eventList as $event)
        <br>
        <h5><a href="/events/{{ $event->slug }}">{{ $event->name }}</a></h5>
        <p>Held by {{ $event->by_division }} and led by {{ $event->leader }}</p>
        {{ $event->exerpt }}
        <br>
    @endforeach
@endsection