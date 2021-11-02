@extends('layouts.main')

@section('container')
    <h1>Events Details</h1>

    @foreach ($eventList as $event)
        <br>
        <h5><a href="/events/{{ $event["id"] }}">{{ $event["name"] }}</a></h5>
        <p>Held by {{ $event["by_division"] }} and led by {{ $event["leader"] }}</p>
        <p>{{ $event["exerpt"] }}</p>
    @endforeach
@endsection