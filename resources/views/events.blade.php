@extends('layouts.main')

@section('container')
    <h3 class="mb-5 ">SIGNAL's Events</h3>


    @if ($eventList->count())
        {{-- Latest Events --}}
        <div class="card mb-3">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
        </div>
        {{-- End of Latest Events --}}
    @else
        <p class="text-center fs-4">No post found.</p>
    @endif


    @foreach ($eventList as $event)
    <article class="mb-5 border-bottom pb-3">
        <h5><a href="/events/{{ $event->slug }}">{{ $event->name }}</a></h5>
        {{-- <p>Posted by {{ $event->user->name }}</p> --}}
        <p>{{ $event->excerpt }}</p>
        <a href="/events/{{ $event->slug }}">Read more...</a>
    </article>
    @endforeach
@endsection