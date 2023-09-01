@extends('layouts.admin')

{{-- FORM PER INSERIRE NUOVI PAZIENTI ANIMALI :3 --}}
@section('content')
    <div class="container">

        <h4 class='mt-4'>Compila la form e aggiungi un paziente peloso, piumato o rugoso</h4>

        <div class="row">
            <div class="col-9">
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
                <form action="{{route('admin.animals.update', $animal->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                    {{-- NOME --}}
                    <div class="form-group">
                        <label for="" class="control-label">Nome</label>
                        <input type="text"class="form-control" id="name" name="name" value="{{ old('name') ?? $animal->name }}">
                    </div>

                    {{-- SPECIE --}}
                    <div class="form-group">
                        <label for="" class="control-label">Specie</label>
                        <input type="text"class="form-control" id="specie" name="specie" value="{{ old('specie') ?? $animal->specie }}">
                    </div>

                    {{-- DATA DI NASCITA --}}
                    <div class="form-group">
                        <label for="" class="control-label">Data di nascita</label>
                        <input type="date"class="form-control" id="date_of_birth" name="date_of_birth" value="{{ old('date_of_birth') ?? $animal->date_of_birth }}">
                    </div>

                    {{-- GENERE - M/F --}}
                    <div class="form-group">
                        <label for="" class="control-label">Genere</label>
                        <select class="form-select form-select-sm" aria-label="Small select example" id="genre" name="genre">
                          <option selected value="1">Maschio</option>
                          <option value="0">Femmina</option>
                        </select>
                    </div>

                    {{-- PROPRIETARIO --}}
                    <div class="form-group">
                        <label for="" class="control-label">Nome del proprietario</label>
                        <input type="text"class="form-control" id="owner" name="owner" value="{{ old('owner') ?? $animal->owner }}">
                    </div>

                    {{-- NOTE --}}
                    <div class="form-group mb-3">
                        <label for="" class="control-label">Note aggiuntive</label>
                        <textarea type="text"class="form-control" id="note" name="note">{{ old('note') ?? $animal->note }}</textarea>
                    </div>

                    <div class="col-12 d-flex justify-content-between">
                        <a class="btn btn-md btn-primary" href="{{route('admin.animals.index')}}">Torna alla home</a>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Modifica Paziente</button>
                        </div>
                    </div>
                    

                </form>

            </div>
        </div>



    </div>
@endsection