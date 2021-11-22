@extends('layouts.main')

@section('container')
    <h1 class="mb-5">Category: {{ $category }}</h1>


    {{-- Events List --}}
    <div class="container">
        <div class="row">
            @foreach ($eventList as $event)
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <img src="https://source.unsplash.com/800x400?{{ $event->category->name }}" class="card-img-top"
                            alt="{{ $event->category->name }}">
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

    {{-- @foreach ($eventList as $event)
        <br>
        <h5><a href="/events/{{ $event->slug }}">{{ $event->name }}</a></h5>
        <p>Held by {{ $event->division->name }} and coordinated by {{ $event->member->name }}</p>
        {{ $event->exerpt }}
        <br>
    @endforeach --}}
@endsection
