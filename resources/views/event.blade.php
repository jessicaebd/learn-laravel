@extends('layouts.main')

@section('container')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1 class="mb-5">{{ $eventList->name }}</h1>
                <p> Category 
                    <a href="/categories/{{ $eventList->category->slug }}" class="text-decoration-none">
                        {{ $eventList->category->name }}
                    </a> | Held by {{ $eventList->division->name }}
                </p>
                <img src="https://source.unsplash.com/random/800x400" class="card-img-top" alt="{{ $eventList->category->name }}" class="img-fluid">

                <div class="my-3">
                    {{ $eventList->description }}
                </div>

                <a href="/events">Back to Events</a>
            </div>
        </div>
    </div>


    

@endsection