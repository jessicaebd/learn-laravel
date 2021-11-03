@extends('layouts.main')

@section('container')
    <div>
        <h3>What is SIGNAL?</h3>
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt, repudiandae! Voluptatibus, iste excepturi tempora illum, libero rem ducimus magnam cupiditate ratione eius commodi explicabo odit nulla debitis ex magni aspernatur illo dolorem ea at. Aliquid, voluptatum exercitationem aliquam laborum impedit provident nemo? Modi ducimus nesciunt optio dolores, rem reiciendis laborum?
        </p>
    </div>

    <br>

    <div>
        <h3>Team's Member:</h3>
        <ul>
            @foreach ($members as $member)
            <li>
                <dt>{{ $member->name }} </dt>
                <dd>from {{ $member->class }} as {{ $member->role }}</dd>
            </li>
            @endforeach
        </ul>
    </div>
@endsection