@extends('layouts.main')

@section('container')
    <article>
        <h1>{{ $event["eventName"] }}</h1>
    </article>
    <br>
    <p>Held by {{ $event["division"] }} and led by {{ $event["leader"] }}</p>
    <p>{{ $event["description"] }}</p>
@endsection