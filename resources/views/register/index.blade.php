@extends('layouts.main')

@section('container')
    <div class="row justify-content-center">
        <div class="col-md-5">
            <main class="form-registration">
                <h1 class="h3 mb-5 fw-normal text-center">Register</h1>
                
                <form action="/register" method="post">
                    @csrf
                    <div class="form-floating">
                        <input type="name" class="form-control" id="name" placeholder="Name">
                        <label for="name">Name</label>
                    </div>

                    <div class="form-floating">
                        <input type="username" class="form-control" id="username" placeholder="Username">
                        <label for="username">Username</label>
                    </div>

                    <div class="form-floating">
                        <input type="email" class="form-control" id="email" placeholder="name@example.com">
                        <label for="email">Email address</label>
                    </div>

                    <div class="form-floating">
                        <input type="password" class="form-control" id="password" placeholder="Password">
                        <label for="password">Password</label>
                    </div>

                    <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Register</button>
                </form>

                <small class="d-block text-center mt-3">
                    Already registered? <a href="/login">Go to Login Page</a>
                </small>
            </main>            
        </div>
    </div>
@endsection