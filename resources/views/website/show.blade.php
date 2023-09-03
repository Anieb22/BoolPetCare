@extends('layouts.app')
@section('content')

    {{-- SLOGAN INIZIALE --}}
    <div class="container mb-5">
        <div class="row">
            <div class="col-12">
                {{--TITOLONE  --}}
                <h1 class="text-light mt-5 mb-3 text-center">
                    Dai ai tuoi pazienti il meglio che meritano
                </h1>
            </div>
        </div>
        {{-- PARAGRAFO 1 + IMMAGINE WEB CANE--}}
        <div class="row mt-5">
            {{-- COL LEFT--}}
            <div class="col-12 col-md-6">
                <div class="d-flex h-100 align-items-center">
                    <p class="text-light fs-5">
                        Il nostro sito dedicato alla cura degli animali offre consigli, informazioni e risorse essenziali per mantenere i vostri amici a quattro zampe sani e felici. Scoprite articoli, guide e suggerimenti per prendervi cura dei vostri animali domestici in modo amorevole e responsabile.
                    </p>
                </div>
            </div>
            {{-- COL RIGHT - IMMAGINE CANE --}}
            <div class="col-12 col-md-6">
                <img src="{{ Vite::asset('resources\img\website.jpg') }}" class="d-block w-100 object-fit-fill" alt="...">
            </div>
        </div>
    </div>
    {{-- FINE SLOGAN INIZIALE --}}

    {{-- SFONDO BIANCO - VISIONE E MISSIONE --}}
    <div class="bg-light w-100 p-5">

        <div class="row">
            {{-- COL LEFT- VISIONE--}}
            <div class="col-12 col-md-6">
                <div class="ms-5">
                    <h2 class=>
                        La nostra visione
                    </h2>
                    <p class="mt-3">
                        Rendere più facile ai veterinari tenere sotto controllo la salute dei loro pazienti pelosi.
                    </p>
                </div>
            </div>
            {{-- COL RIGHT - MISSIONE --}}
            <div class="col-12 col-md-6">
                <div class="ms-5">
                    <h2 class=>
                        La nostra missione
                    </h2>
                    <p class="mt-3 me-3">
                        Accompagnare le cliniche veteriare verso un fututo sempre più tecnologico e all'avanguardia.
                    </p>
                </div>
            </div>
        </div>
    </div>
    {{-- SFONDO BIANCO - VISIONE E MISSIONE --}}

    <div class="container mb-5">
        {{-- SLOGAN FINALE --}}
        <div class="row">
            <div class="col-12">
                <h1 class="text-light mt-5 mb-3 text-center">
                    Unisciti a noi oggi stesso e sperimenta la tranquillità di avere tutto sotto controllo!
                </h1>
            </div>

        </div>
    </div>

@endsection