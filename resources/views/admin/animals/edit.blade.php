@extends('layouts.admin')

@section('content')
    <div class="container">

        <h4 class='mt-4 text-white'>Compila la form e aggiungi un paziente peloso, piumato o rugoso</h4>

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

                {{-- INIZIO FORM --}}
                <form action="{{ route('admin.animals.update', $animal->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    {{-- NOME --}}
                    <div class="form-group">
                        <label for="" class="control-label text-white my-3">Nome</label>
                        <input type="text"class="form-control" id="name" name="name"
                            value="{{ old('name') ?? $animal->name }}">
                    </div>

                    <div class="form-group">
                        <label for="" class="control-label text-white my-3">Specie</label>
                        <input type="text"class="form-control" id="specie" name="specie"
                            value="{{ old('specie') ?? $animal->specie }}">
                    </div>


                    <div class="form-group">
                        <label for="" class="control-label text-white my-3">Data di nascita</label>
                        <input type="date"class="form-control" id="date_of_birth" name="date_of_birth"
                            value="{{ old('date_of_birth') ?? $animal->date_of_birth }}">
                    </div>

                    <div class="form-group">
                        <label for="" class="control-label text-white my-3">Genere</label>
                        <select class="form-select form-select-sm" aria-label="Small select example" id="genre"
                            name="genre">
                            <option selected value="">Inserisci il genere del tuo pet</option>
                            <option value="1">Maschio</option>
                            <option value="0">Femmina</option>
                        </select>
                    </div>


                    <div class="form-group">
                        <label for="" class="control-label text-white my-3">Nome del proprietario</label>
                        <input type="text"class="form-control" id="owner" name="owner"
                            value="{{ old('owner') ?? $animal->owner }}">
                    </div>


                    <div class="form-group">
                        <label for="" class="control-label text-white my-3">Note aggiuntive</label>
                        <textarea type="text"class="form-control" id="note" name="note">{{ old('note') ?? $animal->note }}</textarea>
                    </div>
                    {{-- SELEZIONE VACCINAZIONI --}}
                    <div class="form-group ">
                        <div class="control-label text-white my-3">Seleziona la vaccinazione</div>
                        <select class="form-control" name="vaccination[]">
                            <option value="">Seleziona una tipologia di vaccino</option>

                            @foreach ($vaccinations as $vaccination)
                                <option {{ $vaccination->id }} value="{{ $vaccination->id }}">{{ $vaccination->type }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    {{-- DATA VACCINAZIONE --}}
                    <div class="form-group">
                        <label class="control-label text-white my-3">Data di vaccinazione</label>
                        <input type="date"class="form-control" id="vaccination_date" name="vaccination_date">
                    </div>
            </div>
            {{-- PULSANTI --}}
            <div class="col-9 d-flex justify-content-between mt-5 mb-4">
                <a class="btn btn-md btn-primary" href="{{ route('admin.animals.index') }}">Torna alla home</a>
                <div class="form-group">
                    <button type="submit" class="btn btn-md btn-warning">Modifica Paziente</button>
                </div>
            </div>
            </form>
        </div>
    </div>
    </div>
@endsection
