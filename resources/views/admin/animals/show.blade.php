@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 bg-dark" id="animals">
                <div class="col-12 position-absolute w-75" id="animal">
                    <img src="{{ $animal['thumb'] }}" alt="" class="my-3">
                </div>
                <div
                    class="col-12 text-white bg-success d-flex flex-row mt-4 align-items-center border rounded border-0 p-2 justify-content-between">
                    <section class="d-flex flex-row">
                        <h3 class="text-white bold-text m-4"> Nome del tuo Pet:
                            <h2 class="text-white bold-text m-4"><strong>{{ $animal->name }}</strong></h2>
                        </h3>
                    </section>
                </div>
                {{-- SECTION SPECIE PET --}}
                <div class="col-12 d-flex flex-row justify-content-between">
                    <div class="col-12 my-4 bg-dark">
                        <h4 class="text-white">Specie del tuo Pet: {{ $animal->specie }}</h4>
                        <p class="text-white bg-dark" id="description">
                            <strong><em>{{ $animal->note }}</em></strong>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-dark">
        <div class="container">
            <div class="row d-flex justify-content-between">
                <div class="col-12 bg-dark">
                    <table class="table table-dark" id="talent">
                        {{-- SEZIONE DETTAGLI --}}
                        <thead>
                            <tr>
                                <th scope="col" colspan="4">
                                    <h3>
                                        Specifiche del tuo Pet
                                    </h3>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- SPECIFICA DELLA DATA DI NASCITA --}}
                            <tr>
                                <th scope="row" colspan="2">Data di nascita:</th>
                                <td class="text-white text-uppercase">
                                    {{ $animal->date_of_birth }}
                                </td>
                            </tr>
                            {{-- SPECIFICA DEL GENERE --}}
                            <tr>
                                <th scope="row" colspan="2">Genere: </th>
                                <td>{{ $animal->genre }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                {{-- SEZIONE PROPRIETARIO --}}
                <div class="col-12">
                    <table class="table table-light" id="talent">
                        <thead>
                            {{-- SEZIONE DETTAGLI PROPRIETARIO --}}
                            <tr>
                                <th scope="col" colspan="4">
                                    <h3> Info Proprietario: </h3>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- NOME PROPRIETARIO --}}
                            <tr>
                                <th scope="row" colspan="2">Nome: </th>
                                <td class="text-primary">
                                    {{ $animal->owner }}
                                </td>
                            </tr>
                            <tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        {{-- SEZIONI ANIMALI VISITATI --}}
        <div class="container">
            <div class="counter__content mt-5">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="counter__item">
                            <div class="counter__item__text">
                                <i class="icon fas fa-project-diagram fa-3x"></i>
                                <h2 class="counter_num">54</h2>
                                <p>Animali Inseriti ogni giorno
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="counter__item second__item">
                            <div class="counter__item__text">
                                <i class="icon far fa-smile-beam fa-3x"></i>
                                <h2 class="counter_num">452</h2>
                                <p>Proprietari felici</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="counter__item third__item">
                            <div class="counter__item__text">
                                <i class="icon fas fa-chalkboard-teacher fa-3x"></i>
                                <h2 class="counter_num">57</h2>
                                <p>Nuovi Pet ogni giorno</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="counter__item four__item">
                            <div class="counter__item__text">
                                <i class="icon fas fa-list-alt fa-3x"></i>
                                <h2 class="counter_num">5418</h2>
                                <p>Per visitati ogni anno</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
