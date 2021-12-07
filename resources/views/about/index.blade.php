@extends('layouts.main')

@section('container')
    <div>
        <h3>What is SIGNAL?</h3>
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt, repudiandae! Voluptatibus, iste excepturi
            tempora illum, libero rem ducimus magnam cupiditate ratione eius commodi explicabo odit nulla debitis ex magni
            aspernatur illo dolorem ea at. Aliquid, voluptatum exercitationem aliquam laborum impedit provident nemo? Modi
            ducimus nesciunt optio dolores, rem reiciendis laborum?
        </p>
    </div>

    <br>



    {{-- <li>
        <dt>{{ $member->name }} </dt>
        <dd>from {{ $member->class }} as 
            <a href="/divisions/{{ $member->division->slug }}">
                {{ $member->division->name }}
            </a>
        </dd>
    </li> --}}


    <h3>Team's Member:</h3>

    {{-- Member List Cards --}}
    <div class="container">
        <div class="row">
            @foreach ($members as $member)
                <div class="col-md-3 mb-3">
                    <div class="card">
                        <img src="https://source.unsplash.com/400x400?{{ $member->division->name }}" class="card-img-top"
                            alt="{{ $member->name }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $member->name }}</h5>
                            {{-- <small>
                            <p>Posted by 
                                <a href="#" class="text-decoration-none">{{ $event->user->name }}</a> 
                                <small class="text-muted">
                                    {{ $event->created_at->diffForHumans() }}
                                </small>
                            </p>
                        </small> --}}
                            <p class="card-text">
                                from {{ $member->class }} as
                                <a href="/divisions/{{ $member->division->slug }}">
                                    {{ $member->division->name }}
                                </a>

                            </p>

                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    {{-- End of Member List Cards --}}

@endsection
