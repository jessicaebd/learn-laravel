@extends('layouts.main')

@section('container')
    <h1>Division: {{ $division }}</h1>
    <p>Our Jobdesk is to {{ $jobdesk }}</p>

    <ul>
        @foreach ($memberList as $member)
        <li>
            <b>{{ $member->name }}</b> as {{ $member->status }}
        </li>
        @endforeach
    </ul>

    <a href="/about">Back to Main</a>

@endsection