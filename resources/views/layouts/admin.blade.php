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
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- Usando Vite -->
    @vite(['resources/js/app.js'])
</head>

<body>
    <div id="app">


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
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('admin.animals.index') }}">Dashboard</a>
                            <a class="dropdown-item" href="{{ url('profile') }}">{{__('Profile')}}</a>
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
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
                        <a class="nav-link link-light" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item d-flex justify-content-end">
                            <a class="nav-link link-light" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                </ul>
            </div>
        @endguest
    </div>
</nav>

    <main>
        <div class="container-fluid">
            <div class="row">
                <div class="col-3 bg-dark">
                    <!-- Sidebar -->
                    <div class="bg-dark" id="nav-bar">
                        <nav id="sidebarMenu" class="d-flex flex-column">
                            {{-- LINK ALLE PAGINE --}}
                            <div class="position-sticky flex-column m-auto">
                                <h5 class="text-white m-3"><strong><i>Link alle nostre pagine:</i></strong></h5>
                                <div class="list-group list-group-flush">
                                    <a href="{{ route('admin.animals.index') }}"
                                        class="list-group-item bg-transparent link-light mb-auto">
                                        <i class="fas fa-paw me-3"></i><span>I vostri Pet</span>
                                    </a>
                                    <a href="{{ route('profile.edit') }}"
                                        class="list-group-item bg-transparent link-light mb-auto">
                                        <i class="fas fa-lock fa-fw me-3"></i><span>Utenti</span></a>
                                </div>
                            </div>
                        </nav>
                    </div>

                </div>
                <div class="col-9 bg-dark overflow-y-visible">
                    @yield('content')
                </div>
            </div>
        </div>
    </main>
    </div>
</body>

</html>
