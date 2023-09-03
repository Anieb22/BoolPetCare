@extends('layouts.app')
@section('content')
    <!--DESKTOP SLIDESHOW-->>
    <div id="carouselExampleIndicators" class="carousel slide position-relative shadow-slide d-none d-xxl-block">
        {{-- IMPOSTAZIONI SLIDER --}}
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        {{-- IMMAGINI SLIDER --}}
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ Vite::asset('resources\img\andrew-s-ouo1hbizWwo-unsplash.jpg') }}"
                    class="d-block w-100 object-fit-fill" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{ Vite::asset('resources\img\kate-stone-matheson-uy5t-CJuIK4-unsplash.jpg') }}"
                    class="d-block w-100 object-fit-fill" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{ Vite::asset('resources\img\krista-mangulsone-9gz3wfHr65U-unsplash.jpg') }}"
                    class="d-block w-100 object-fit-fill" alt="...">
            </div>
        </div>
        {{-- BOTTONE SLIDER DI SX --}}
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Precedente</span>
        </button>
        {{-- BOTTONE SLIDER DI DX --}}
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Successivo</span>
        </button>
    </div>
    </div>
    <!--MOBILE SLIDESHOW-->
    <div id="carouselExampleSlidesOnly" class="carousel slide d-xxl-none d-block" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ Vite::asset('resources\img\andrew-s-ouo1hbizWwo-unsplash.jpg') }}" class="d-block w-100"
                    alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{ Vite::asset('resources\img\kate-stone-matheson-uy5t-CJuIK4-unsplash.jpg') }}"
                    class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{ Vite::asset('resources\img\krista-mangulsone-9gz3wfHr65U-unsplash.jpg') }}"
                    class="d-block w-100" alt="...">
            </div>
        </div>
    </div>
 

    <div class="container d-block d-xxl-none">
        <div class="row">
            <div class="col-md-auto">
                <div class="jumbotron p-5 mb-4 rounded-3">
                    <div class="container py-5">
                        {{-- LOGO AZIENDALE --}}
                        <div class="logo_laravel">
                            <img src="{{ Vite::asset('public\img\BoolPetCare@4x.png') }}" class="w-50" alt="">
                        </div>
                        {{-- TITOLO PRINCIPALE --}}
                        <h1 class="display-5 fw-bold text-light mt-3">
                            PROVA SITOOOOO


                        </h1>
                         
                        {{-- SOTTOTITOLO --}}
                        <p class="col-md-10 fs-4 text-light mt-3">Monitora le schede sanitarie, le scadenze dei vaccini e le
                            attività quotidiane in un'unica piattaforma intuitiva.</p>
                        {{-- PULSANTE CONTATTI --}}
                        <a href="{{ route('contacts.create') }}" class="btn btn-success btn-lg mt-4"
                            type="button">Contattaci</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
