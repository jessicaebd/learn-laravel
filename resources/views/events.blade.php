@extends('layouts.main')

@section('container')
    <h1>Events Details</h1>

    @foreach ($eventList as $event)
        <br>
        <h5><a href="/events/{{ $event["slug"] }}">{{ $event["eventName"] }}</a></h5>
        <p>Held by {{ $event["division"] }} and led by {{ $event["leader"] }}</p>
        <p>{{ $event["description"] }}</p>
    @endforeach
@endsection