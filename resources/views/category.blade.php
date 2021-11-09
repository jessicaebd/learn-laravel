@extends('layouts.main')

@section('container')
    <h1>Category: {{ $category }}</h1>

    @foreach ($eventList as $event)
        <br>
        <h5><a href="/events/{{ $event->slug }}">{{ $event->name }}</a></h5>
        <p>Held by {{ $event->division->name }} and coordinated by {{ $event->member->name }}</p>
        {{ $event->exerpt }}
        <br>
    @endforeach
@endsection