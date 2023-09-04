<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>BoolPetCare</title>
    <link rel="icon" href="{{ Vite::asset('public\img\favicon.ico')}}" type="image/x-icon">


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Usando Vite -->
    @vite(['resources/js/app.js'])
</head>
</head>
<body class="bg-dark">
<nav class="navbar navbar-expand-lg bg-dark">
    <div class="container-fluid container">
        <div class="col-lg-2 col-3 col-xl-1">
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{ Vite::asset('public\img\BoolPetCare@4x.png')}}" alt=""  id="logo">
            </a>
        </div>
        @auth
            <!-- Visualizza solo quando l'utente è autenticato -->
             <div class="d-xl-flex justify-content-end pt-3" id="navbarNav">
                <ul class="">
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle link-light" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>
                        <div class="dropdown-menu dropdown-menu-right bg-dark" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item link-light" href="{{ route('admin.animals.index') }}">Dashboard</a>
                            <a class="dropdown-item link-light" href="{{ url('profile') }}">{{__('Profile')}}</a>
                            <a class="dropdown-item link-light" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                </ul>
            </div>
        @endauth
        @guest
            <!-- Visualizza solo quando l'utente è un ospite -->
            <button class="navbar-toggler border border-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars text-light"></i>
            </button>
            <div class="collapse navbar-collapse d-xl-flex justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item d-flex justify-content-end">
                        <a class="nav-link link-light" href="{{ route('login') }}">Login</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item d-flex justify-content-end">
                            <a class="nav-link link-light" href="{{ route('register') }}">Registrati</a>
                        </li>
                    @endif
                </ul>
            </div>
        @endguest
    </div>
</nav>



    <main class="overflow-hidden">
        @yield('content')
    </main>
</body>
</html>