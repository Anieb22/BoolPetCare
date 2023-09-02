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
                        <h2 class="text-white bold-text m-4"> Nome:
                            <h1 class="text-white bold-text m-4"><strong>{{ $animal->name }}</strong></h1>
                        </h2>
                    </section>
                </div>
                <hr style="color: #00ff09">
                {{-- SECTION SPECIE PET --}}
                <div class="col-12 d-flex flex-row justify-content-between">
                    <div class="col-12 my-2 bg-dark">
                        <h4 class="text-info">Specie: </h4>
                        <h3 class="text-warning"><strong>{{ $animal->specie }}</strong></h3>
                        {{-- DESCRIZIONE DEL PET --}}
                        <h4 class="text-info pt-4">Descrizione: </h4>
                        <p class="text-white bg-dark pt-3" id="description">
                            <em>{{ $animal->note }}</em>
                        </p>
                    </div>
                </div>
                <hr style="color: #00ff09">
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
                                    <h3 class="text-info">Dati anagrafici: </h3>
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
                                <td>{{ $animal->genre === 0 ? 'Femmina' : 'Maschio' }}</td>
                            </tr>
                            {{-- SEZIONE VACCINAZIONI EFFETTUATE --}}
                            <tr>
                                <th scope="row" colspan="2">Vaccinazioni effettuate: </th>
                                <td>{{ isset($vaccinations) ? $vaccinations->type : 'Nessuna vaccinazione effettuata' }}
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                {{-- SEZIONE PROPRIETARIO --}}
                <div class="col-12">
                    <table class="table table-dark" id="talent">
                        <thead>
                            {{-- SEZIONE DETTAGLI PROPRIETARIO --}}
                            <tr>
                                <th scope="col" colspan="4">
                                    <h3 class="text-info"> Info Proprietario: </h3>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- NOME PROPRIETARIO --}}
                            <tr>
                                <th scope="row" colspan="2">Nome: </th>
                                <td class="text-white">
                                    {{ $animal->owner }}
                                </td>
                            </tr>
                            <tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        {{-- SZIONE PULSANTI --}}
        <div class="my-2">
            {{-- PULSANTE TORNA INDIETRO --}}
            <button type="button" class="btn btn-md btn-danger mx-5">
                <a href="{{ route('admin.animals.index') }}"
                    class="link-underline link-underline-opacity-0 link-light text-white">Torna indietro</a>
            </button>
            {{-- PULSANTE TORNA ALLA HOMEPAGE --}}
            <button type="button" class="btn btn-md btn-warning mx-5">
                <a href="{{ route('homepage') }}"
                    class="link-underline link-underline-opacity-0 link-light text-black">Torna alla Home Page</a>
            </button>
        </div>
        {{-- FINE SEZIONE PULSANTI --}}
        {{-- SEZIONI ANIMALI VISITATI --}}
        <div class="container mb-5">
            <div class="counter__content mt-4">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="counter__item">
                            <div class="counter__item__text">
                                <i class="icon fas fa-project-diagram fa-3x text-success"></i>
                                <h2 class="counter_num text-warning">54</h2>
                                <h5 class="text-white">Pet visitati oggi</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="counter__item second__item">
                            <div class="counter__item__text">
                                <i class="icon far fa-smile-beam fa-3x text-success"></i>
                                <h2 class="counter_num text-warning">452</h2>
                                <h5 class="text-white">Proprietari felici</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="counter__item third__item">
                            <div class="counter__item__text">
                                <i class="icon fas fa-chalkboard-teacher fa-3x text-success"></i>
                                <h2 class="counter_num text-warning">35</h2>
                                <h5 class="text-white">Nuovi pet ogni giorno</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="counter__item four__item">
                            <div class="counter__item__text">
                                <i class="icon fas fa-list-alt fa-3x text-success"></i>
                                <h2 class="counter_num text-warning">8946</h2>
                                <h5 class="text-white">Pet visitati ogni anno</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
