@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12" id="animals">
                <div class="col-12 position-absolute w-75" id="animal">
                    <img src="{{ $animal['thumb'] }}" alt="" class="my-3">
                </div>
                <div
                    class="col-8 bg-success d-flex flex-row mt-4 align-items-center border rounded border-0 p-2 justify-content-between">
                    <section class="d-flex flex-row">
                        <h3 class="text-white bold-text m-4"> Nome del tuo Pet:
                            <h2 class="text-white bold-text"><strong>{{ $animal->name }}</strong></h2>
                        </h3>
                    </section>
                </div>
                <div class="col-12 d-flex flex-row justify-content-between">
                    <div class="col-8 my-4">
                        <h4 class="text-black">Specie del tuo Pet: {{ $animal->specie }}</h4>
                        <p class=".text-body-secondary" id="description">
                            <strong><em>{{ $animal->note }}</em></strong>
                        </p>
                    </div>
                    {{--                     <div class="col-2 d-flex flex-column align-items-end mb-5">
                        <h6 class="text-uppercase">Foto del tuo animale:</h6>
                        <img src="{{ $animal->img }}" alt="Immagine del tuo Pet">
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
    <div class="bg-light" style="height: 300px">
        <div class="container">
            <div class="row d-flex justify-content-between">
                <div class="col-12">
                    <table class="table table-light" id="talent">
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
                                <td class="text-black text-uppercase">
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
    </div>
@endsection
