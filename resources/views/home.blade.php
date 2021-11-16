@extends('layouts.main')

@section('container')
    {{-- Sliding Images --}}
    @include('home.carousel')
    {{-- End of Sliding Images --}}

    <div class="container mt-5">
        @include('home.featurettes')
    </div>
@endsection
