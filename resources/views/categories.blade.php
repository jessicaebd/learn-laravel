@extends('layouts.main')

@section('container')
    <h1>Category List</h1>

    {{-- Categories List --}}
    <div class="container">
        <div class="row">
            @foreach ($categories as $category)
            <div class="col-md-4 mb-3">
                <div class="card bg-dark text-white">
                    <img src="https://source.unsplash.com/800x400?{{ $category->name }}" class="card-img" alt="{{ $category->name }}">


                    <div class="card-img-overlay d-flex align-items-center p-0">
                        <h5 class="card-title text-center flex-fill p-2 fs-3" style="background-color: rgba(0,0,0,0.7)">
                            <a href="/categories/{{ $category->slug }}" class="text-decoration-none">
                                {{ $category->name }}
                            </a>
                        </h5>
                    </div>
                  </div>
            </div>
            @endforeach
        </div>
    </div>
    {{-- End of Categories List --}}

@endsection