@extends('layouts.main')

@section('container')
    <h3>Team's Member:</h3>

    @foreach ($members as $member)
    <br>
    <h5>{{ $member->name }}</h5>
    <p>as <b>{{ $member->role }}</b> from {{ $member->class }}</p>
    @endforeach
@endsection