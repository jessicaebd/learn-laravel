<nav class="navbar navbar-expand-lg navbar-light fixed-top bg-light shadow-sm p-md-3 p-2">
    <div class="container">
        <a class="navbar-brand" href="/">
            <img src="images/signal-logo.png" alt="signal's logo" width="25" height="25"
                class="d-inline-block align-text-top me-2"> <b>SIGNAL</b></a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link {{ $title === 'Home' ? 'active' : '' }}" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $title === 'About' ? 'active' : '' }}" href="/about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $title === 'Events' ? 'active' : '' }}" href="/events">Events</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $title === 'Categories' ? 'active' : '' }}"
                        href="/categories">Categories</a>
                </li>
            </ul>

            <ul class="navbar-nav ms-auto">
                @auth
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Hi, {{ auth()->user()->name }}
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">

                            <li>
                                <a class="dropdown-item" href="/dashboard">
                                    <i class="bi bi-layout-text-sidebar"></i>
                                    Dashboard</a>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>

                            <li>
                                <form action="/logout" method="post">
                                    @csrf
                                    <button type="submit" class="dropdown-item">
                                        <i class="bi bi-box-arrow-right"></i>
                                        Log Out
                                    </button>
                                </form>
                            </li>

                        </ul>
                    </li>
                @else
                    {{-- Login Button --}}
                    <li class="nav-item">
                        <a class="btn px-4 btn-dark text-light nav-link rounded-pill {{ $title === 'Login' ? 'active' : '' }}"
                            href="/login">
                            <i class="bi bi-box-arrow-left"></i> Login
                        </a>
                    </li>
                    {{-- Login Button --}}
                @endauth
            </ul>

        </div>
    </div>
</nav>

{{-- ini haram --}}
<div>
    <h1>-</h1>
</div>
{{-- ini haram --}}
