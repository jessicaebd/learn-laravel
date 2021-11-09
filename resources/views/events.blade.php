@extends('layouts.main')

@section('container')
    <h3 class="mb-5 ">SIGNAL's Events</h3>

    {{-- Latest Events --}}
    @if ($eventList->count())
        <div class="card mb-3">
            <img src="https://source.unsplash.com/random/800x200" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">
                    <a href="/events/{{ $eventList[0]->slug }}" class="text-decoration-none">
                        {{ $eventList[0]->name }}
                    </a>
                </h5>
                <small>
                    <p>Posted by 
                        <a href="#" class="text-decoration-none">{{ $eventList[0]->user->name }}</a>
                    </p>
                </small>
                <p class="card-text">{{ $eventList[0]->excerpt }}</p> 
                <p class="card-text">
                    <small class="text-muted">
                        Last updated {{ $eventList[0]->created_at->diffForHumans() }}
                    </small>
                </p>
                <a href="/events/{{ $eventList[0]->slug }}" class="btn btn-primary">
                    Read more...
                </a>
            </div>
        </div>
    @else
        <p class="text-center fs-4">No post found.</p>
    @endif
    {{-- End of Latest Events --}}

    {{-- Events List --}}
        <div class="container">
            <div class="row">
                @foreach ($eventList as $event)
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <img src="https://source.unsplash.com/random/800x400" class="card-img-top" alt="{{ $event->category->name }}">
                        <div class="card-body">
                            <h5 class="card-title">
                                <a href="/events/{{ $event->slug }}" class="text-decoration-none">
                                    {{ $event->name }}
                                </a>
                            </h5>
                            <small>
                                <p>Posted by 
                                    <a href="#" class="text-decoration-none">{{ $event->user->name }}</a> 
                                    <small class="text-muted">
                                        {{ $event->created_at->diffForHumans() }}
                                    </small>
                                </p>
                            </small>
                            <p class="card-text">
                                {{ $event->excerpt }}
                            </p>
                            <a href="/events/{{ $event->slug }}" class="btn btn-primary">
                                Read more...
                            </a>
                        </div>
                      </div>
                </div>
                @endforeach
            </div>
        </div>
    {{-- End of Events List --}}

@endsection