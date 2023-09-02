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
                <form action="{{ route('admin.animals.store') }}" method="POST">
                    @csrf

                    <div class="form-group">
                        <label for="" class="control-label text-white">Nome</label>
                        <input type="text"class="form-control" id="name" name="name">
                    </div>


                    <div class="form-group">
                        <label for="" class="control-label text-white">Specie</label>
                        <input type="text"class="form-control" id="specie" name="specie">
                    </div>


                    <div class="form-group">
                        <label for="" class="control-label text-white">Data di nascita</label>
                        <input type="date"class="form-control" id="date_of_birth" name="date_of_birth">
                    </div>


                    <div class="form-group">
                        <label for="" class="control-label text-white">Genere</label>
                        <select class="form-select form-select-sm" aria-label="Small select example" id="genre"
                            name="genre">
                            <option selected value="0">Maschio</option>
                            <option value="1">Femmina</option>
                        </select>
                    </div>


                    <div class="form-group">
                        <label for="" class="control-label text-white">Nome del proprietario</label>
                        <input type="text"class="form-control" id="owner" name="owner">
                    </div>


                    <div class="form-group mb-3">
                        <label for="" class="control-label text-white">Note aggiuntive</label>
                        <textarea type="text"class="form-control" id="note" name="note"></textarea>
                    </div>

                    <div class="form-group mb-3">
                        <div>Seleziona la vaccinazione</div>
                        <select class="form-control" name="vaccination">
                            <option value="">Seleziona una tipologia di vaccino</option>
                            @foreach ($vaccinations as $vaccination)
                                <option {{ $vaccination->id }} value="{{ $vaccination->id }}">{{ $vaccination->type }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="" class="control-label text-white">Data di vaccinazione</label>
                        <input type="date" class="form-control" id="vaccination_date" name="vaccination_date">
                    </div>
                </form>
            </div>
        </div>

        <div class="col-12 d-flex justify-content-between">
            <a class="btn btn-md btn-primary" href="{{ route('admin.animals.index') }}">Torna alla home</a>
            <div class="form-group">
                <button class="btn btn-sm btn-success" type="submit">Salva</button>
            </div>
        </div>
        </form>
    </div>
    </div>
    </div>
@endsection
