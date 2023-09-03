@extends('layouts.admin')

{{-- FORM PER INSERIRE NUOVI PAZIENTI ANIMALI :3 --}}
@section('content')
    <div class="container">
        {{-- TITOLO PAGINA --}}
        <h2 class='mt-4'>Compila il form qui sotto per ricevere informazioni</h2>

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
                <form action="{{ route('admin.animals.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label">Indirizzo Mail: </label>
                        <input type="email" class="form-control" id="email" placeholder="nome@esempio.com">
                    </div>
                    <div class="mb-3">
                        <label for="infotext" class="form-label">Richieste e info:</label>
                        <textarea class="form-control" id="infotext" rows="3"></textarea>
                    </div>
                </form>
                {{-- FINE FORM --}}
                {{-- SEZIONE PULSANTI --}}
                <div class="col-12 d-flex justify-content-between">
                    {{-- PULSANTE RITORNO HOME --}}
                    <a class="btn btn-md btn-primary" href="{{ route('admin.animals.index') }}">
                        Torna alla home
                    </a>
                    {{-- PULSANTE INVIO FORM --}}
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">
                            Invia Richiesta
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
