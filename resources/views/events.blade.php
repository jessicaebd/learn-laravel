@extends('layouts.main')

@section('container')
    <h3 class="mb-5 ">SIGNAL's Events</h3>

    @foreach ($eventList as $event)
    <article class="mb-5 border-bottom pb-3">
        <h5><a href="/events/{{ $event->slug }}">{{ $event->name }}</a></h5>
        <p>Posted by {{ $event->user->name }}</p>
        <p>{{ $event->excerpt }}</p>
        <a href="/events/{{ $event->slug }}">Read more...</a>
    </article>
    @endforeach
@endsection