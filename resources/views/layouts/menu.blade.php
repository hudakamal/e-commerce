<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/all.min.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    @stack('style')
    <style>
            .toggle-container {
              display: flex;
            }

            .toggle-btn {
                flex:1;
                border: none;
                outline: none;
                background-color: transparent;
                color: #000;
                cursor: pointer;
                padding: 8px 16px;
                font-size: 16px;
                border-radius: 20px;
                transition: background-color 0.3s ease;
            }


            .toggle-btn.active {
              background-color: #4C4C6D;
              color: white;
            }

            .content {
              display: none;
            }

            .visible {
              display: block;
            }

            .btn-close-left {
                position: absolute;
                top: 10px;
                left: 10px;
                z-index: 1050; /* Ensure the close button is on top */
            }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-transparent">
        <div class="container-fluid">
            <!-- Align items to the left -->
            <div class="d-flex align-items-center">
              <a class="navbar-brand" href="{{route('home') }}"><img src="image/logo.gif" alt="Logo" style="width: 100px; height: 100px;"></a>
          </div>

          <!-- Align items to the middle -->
          <div class="d-flex align-items-center justify-content-center text-center">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('home*') ? 'active' : '' }}" href="{{route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('product*') ? 'active' : '' }}" href="{{ route('product') }}">Product</a>
                </li>
            </ul>
        </div>

        <!-- Align items to the right -->
        <div class="d-flex align-items-center justify-content-end">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <span class="position-relative">
                            <i class="fa fa-bell fa-lg"></i>
                            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                99+
                                <span class="visually-hidden">unread messages</span>
                            </span>
                        </span>
                    </a>
                </li>
                @guest
                @if (Route::has('login'))
                <li class="nav-item">
                    <a class="nav-link" role="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop">{{ __('Login') }}</a>
                </li>
                @endif

                @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link" role="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop">{{ __('Register') }}</a>
                </li>
                @endif
                @else
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

<main class="py-4">
    @yield('content')
</main>

<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
             <button type="button" class="btn-close btn-close-left" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6 p-5">
                                <div class="mb-3 toggle-container">
                                    <button class="toggle-btn active" id="login-toggle">Login</button>
                                    <button class="toggle-btn" id="register-toggle">Register</button>
                                </div>
                                <div id="login-content" class="content visible">
                                    <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="mb-3">
                                        <h3><b>Login</b></h3>
                                        <p disabled>See you growth and get consulting support!</p>
                                        <div class="d-flex justify-content-around">
                                            <a href="https://www.instagram.com/">
                                                <i class="fa fa-instagram" style="color: black;"></i>
                                            </a>
                                            <a href="https://www.example.com/">
                                                <i class="fa fa-google" style="color: black;"></i>
                                            </a>
                                            <a href="https://twitter.com/">
                                                <i class="fa fa-twitter" style="color: black;"></i>
                                            </a>
                                            <a href="https://www.facebook.com/">
                                                <i class="fa fa-facebook" style="color: black;"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="mb-3">
                                        <label for="email" class="form-label">{{ __('Email Address') }}</label>
                                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" id="email" autofocus>
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="password" class="form-label">{{ __('Password') }}</label>
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    @if (Route::has('password.request'))
                                    <div class="mb-3">
                                        <small><a href="{{ route('password.request') }}" class="nav-link">Forgot Password?</a></small>
                                    </div>
                                    @endif
                                    <div class="mb-3 d-grid">
                                        <button type="submit" class="btn btn-primary">Login</button>
                                    </div>
                                    </form>
                                </div>
                                <div id="register-content" class="content">
                                    <form method="POST" action="{{ route('register') }}">
                                    @csrf
                                            <div class="mb-3">
                                                <h3><b>Sign Up</b></h3>
                                                <p disabled>See you growth and get consulting support!</p>
                                                <div class="d-flex justify-content-around">
                                                    <a href="https://www.instagram.com/">
                                                        <i class="fa fa-instagram" style="color: black;"></i>
                                                    </a>
                                                    <a href="https://www.example.com/">
                                                        <i class="fa fa-google" style="color: black;"></i>
                                                    </a>
                                                    <a href="https://twitter.com/">
                                                        <i class="fa fa-twitter" style="color: black;"></i>
                                                    </a>
                                                    <a href="https://www.facebook.com/">
                                                        <i class="fa fa-facebook" style="color: black;"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="mb-3">
                                                <label for="name" class="form-label text-md-end">{{ __('Name') }}</label>

                                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                                    @error('name')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label for="email" class="form-label">{{ __('Email Address') }}</label>
                                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label for="password" class="form-label">{{ __('Password') }}</label>
                                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label for="password-confirm" class="form-label">{{ __('Confirm Password') }}</label>                                            
                                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">              
                                            </div>
                                            <div class="mb-3 d-grid">
                                                <button type="submit" class="btn btn-primary">Login</button>
                                            </div>
                                    </form>
                                </div>
                        </div>
                        <div id="carouselExampleIndicators" class="carousel slide col-md-6" data-bs-ride="carousel">
                          <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                          </div>
                          <div class="carousel-inner">
                            <div class="carousel-item active">
                              <img src="{{ asset('image/2.jpg') }}" class="d-block w-100 carousel-image" alt="...">
                            </div>
                            <div class="carousel-item">
                              <img src="{{ asset('image/1.jpg') }}" class="d-block w-100 carousel-image" alt="...">
                            </div>
                            <div class="carousel-item">
                              <img src="{{ asset('image/3.jpg') }}" class="d-block w-100 carousel-image" alt="...">
                            </div>
                          </div>
                          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                          </button>
                          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                          </button>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        // Initially show the login content and set login toggle as active
        $("#login-toggle").addClass("active");
        $("#login-content").addClass("visible");

        // Handle click event on login toggle button
        $("#login-toggle").click(function() {
            $(this).addClass("active");
            $("#register-toggle").removeClass("active");
            $("#login-content").addClass("visible");
            $("#register-content").removeClass("visible");
        });

        // Handle click event on register toggle button
        $("#register-toggle").click(function(e) {
            e.stopPropagation(); // Prevent the modal from closing
            $(this).addClass("active");
            $("#login-toggle").removeClass("active");
            $("#register-content").addClass("visible");
            $("#login-content").removeClass("visible");
        });

        // Handle click event on modal background to close the modal
        $(".modal").click(function(e) {
            if ($(e.target).hasClass("modal")) {
                $("#login-toggle").addClass("active");
                $("#register-toggle").removeClass("active");
                $("#login-content").addClass("visible");
                $("#register-content").removeClass("visible");
            }
        });
    });
</script>
@stack('scripts')
</body>
</html>