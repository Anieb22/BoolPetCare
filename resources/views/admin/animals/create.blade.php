@extends('layouts.admin')

{{-- FORM PER INSERIRE NUOVI PAZIENTI ANIMALI :3 --}}
@section('content')
    <div class="container">

        <h4 class='mt-4 text-white mb-5'><strong><em>Compila la form e aggiungi un paziente peloso, piumato o
                    rugoso</em></strong></h4>

        <div class="row">
            <div class="col-9">
                {{-- GESTIONE DEGLI ERRORI --}}
                @if ($errors->any())
                    <div class="alert alert-warning" role="alert">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                {{-- FORM DI INSERIMENTO DATI --}}
                <form action="{{ route('admin.animals.store') }}" method="POST">
                    @csrf
                    {{-- INSERIMENTO NOME PET --}}
                    <div class="form-group">
                        <label for="" class="control-label text-white mb-3 mt-2">Nome</label>
                        <input type="text"class="form-control" id="name" name="name">
                    </div>

                    {{-- INSERIMENTO SPECIE DEL PET --}}
                    <div class="form-group">
                        <label for="" class="control-label text-white mb-3 mt-2">Specie</label>
                        <input type="text"class="form-control" id="specie" name="specie">
                    </div>

                    {{-- INSERIMENTO DATA DI NASCITA DEL PET --}}
                    <div class="form-group">
                        <label for="" class="control-label text-white mb-3 mt-2">Data di nascita</label>
                        <input type="date"class="form-control" id="date_of_birth" name="date_of_birth">
                    </div>

                    {{-- SELEZIONE GENERE PET --}}
                    <div class="form-group">
                        <label for="" class="control-label text-white mb-3 mt-2">Genere</label>
                        <select class="form-select form-select-sm" aria-label="Small select example" id="genre"
                            name="genre">
                            <option selected value="">Scegli il genere del tuo pet</option>
                            <option value="0">Maschio</option>
                            <option value="1">Femmina</option>
                        </select>
                    </div>

                    {{-- INSERIMENTO NOME PROPRIETARIO --}}
                    <div class="form-group">
                        <label for="" class="control-label text-white mb-3 mt-2">Nome del proprietario</label>
                        <input type="text"class="form-control" id="owner" name="owner">
                    </div>

                    {{-- INSERIMENTO NOTE AGGIUNTIVE --}}
                    <div class="form-group mb-3">
                        <label for="" class="control-label text-white mb-3 mt-2">Note aggiuntive</label>
                        <textarea type="text"class="form-control" id="note" name="note"></textarea>
                    </div>

                    {{-- SELEZIONE VACCINAZIONE --}}
                    <div class="form-group mb-3">
                        <label for="" class="control-label text-white mb-3 mt-2">Seleziona tipologia di
                            vaccinazione</label>
                        <select class="form-control" name="vaccination">
                            <option value="">Seleziona una tipologia di vaccino</option>
                            @foreach ($vaccinations as $vaccination)
                                <option {{ $vaccination->id }} value="{{ $vaccination->id }}">{{ $vaccination->type }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    {{-- INSERIMENTO DATA VACCINAZIONE --}}
                    <div class="form-group">
                        <label for="" class="control-label text-white mb-3 mt-2">Data di vaccinazione</label>
                        <input type="date" class="form-control" id="vaccination_date" name="vaccination_date">
                    </div>

                    {{-- PULSANTI --}}
                    <div class="col-12 d-flex justify-content-between mt-5 mb-5">
                        {{-- PULSANTE DI RITORNO ALLA HOME --}}
                        <div class="form-group">
                            <a class="btn btn-md btn-primary" href="{{ route('admin.animals.index') }}">Torna alla home</a>
                        </div>
                        {{-- PULSANTE PER SALVARE I DATI INSERITI NEL DB --}}
                        <div class="form-group">
                            <button class="btn btn-md btn-success" type="submit">Salva</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
    </div>
@endsection
