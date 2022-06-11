<nav class="navbar navbar-expand-lg fixed-top navbar-light shadow">
    <div class="container-fluid">
        <a class="navbar-brand ms-5" href="#">
            <img src="{{ asset('img/logo-rafa.png') }}" alt="" width="130" height="44" />
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse me-5" id="navbarNav">
            <ul class="navbar-nav fw-bold">
                @guest
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('about') }}">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('contact') }}">Contact</a>
                    </li>

                    @if (Route::has('login'))
                        <li class="nav-button">
                            <a class="nav-link text-center" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-button">
                            <a class="nav-link signUp btn" href="" data-bs-toggle="modal" data-bs-target="#signUp">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('about') }}">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('contact') }}">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('favorite') }}">Favorite</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a> 
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown"> 
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>

<!-- Modal Sign Up-->
<div class="modal fade" id="signUp" tabindex="-1" aria-labelledby="signUpLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content modal-card">
            <div class="modal-header d-flex justify-content-center">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-dark">
                <h5 class="modal-title text-dark text-center" id="exampleModalLabel">Sign Up</h5>
                <form action="{{ route('register') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input id="name" name="name" type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Full Name ..." value="{{ old('name') }}" required autocomplete="name" autofocus>
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email Address</label>
                        <input id="email" name="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email Address ..." value="{{ old('email') }}" required autocomplete="email">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input id="password" name="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password ..." required autocomplete="new-password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="password-confirm" class="form-label">Confirm Password</label>
                        <input id="password-confirm" type="password" name="password_confirmation" class="form-control" placeholder="Confirm Password ..." required autocomplete="new-password">
                    </div>
                    <div class="buttonSignIn d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary btn-signIn">Sign Up</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>