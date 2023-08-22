@extends('layouts.admin')

{{-- FORM PER INSERIRE NUOVI PAZIENTI ANIMALI :3 --}}
@section('content')
    <div class="container">

        <h4 class='mt-4'>Compila la form e aggiungi un paziente peloso, piumato o rugoso</h4>

        <div class="row">
            <div class="col-12">

                {{-- INIZIO FORM --}}
                <form action="{{route('admin.animals.store')}}" method="POST">
                    @csrf
                    {{-- NOME --}}
                    <div class="form-group">
                        <label for="" class="control-label">Nome</label>
                        <input type="text"class="form-control" id="name" name="name">
                    </div>

                    {{-- SPECIE --}}
                    <div class="form-group">
                        <label for="" class="control-label">Specie</label>
                        <input type="text"class="form-control" id="specie" name="specie">
                    </div>

                    {{-- DATA DI NASCITA --}}
                    <div class="form-group">
                        <label for="" class="control-label">Data di nascita</label>
                        <input type="text"class="form-control" id="date_of_birth" name="date_of_birth">
                    </div>

                    {{-- GENERE - M/F --}}
                    <div class="form-group">
                        <label for="" class="control-label">Genere</label>
                        <input type="text"class="form-control" id="genre" name="genre">
                    </div>

                    {{-- PROPRIETARIO --}}
                    <div class="form-group">
                        <label for="" class="control-label">Nome del proprietario</label>
                        <input type="text"class="form-control" id="owner" name="owner">
                    </div>

                    {{-- NOTE --}}
                    <div class="form-group mb-3">
                        <label for="" class="control-label">Note aggiuntive</label>
                        <textarea type="text"class="form-control" id="note" name="note"></textarea>
                    </div>

                    
                    <a class="btn btn-md btn-primary mb-5" href="">Torna alla home</a>
                    

                </form>

            </div>
        </div>



    </div>
@endsection