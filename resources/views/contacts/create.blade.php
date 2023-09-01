@extends('layouts.app')

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
                <form action="{{ route('contacts.store') }}" method="POST">
                    @csrf
                    {{-- CAMPO NOME --}}
                    <div class="mb-3">
                        <label for="name" class="form-label"><strong><em>Il tuo nome: </em></strong> </label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Mario">
                    </div>
                    {{-- CAMPO COGNOME --}}
                    <div class="mb-3">
                        <label for="surname" class="form-label"><strong><em>Il tuo cognome: </em></strong> </label>
                        <input type="text" class="form-control" name="surname" id="surname" placeholder="Rossi">
                    </div>
                    {{-- CAMPO E-MAIL --}}
                    <div class="mb-3">
                        <label for="email" class="form-label"><strong><em>Indirizzo Mail: </em></strong> </label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="nome@esempio.com">
                    </div>
                    {{-- CAMPO TESTO INFORMAZIONI --}}
                    <div class="mb-3">
                        <label for="phone_number" class="form-label"><strong><em>Numero di telefono: </em></strong></label>
                        <input type="text" class="form-control" name="phone_number" id="phone_number">
                    </div>
                
                {{-- FINE FORM --}}
                {{-- SEZIONE PULSANTI --}}
                <div class="col-12 d-flex justify-content-between">
                    {{-- PULSANTE RITORNO HOME --}}
                    <a class="btn btn-md btn-primary" href="{{ url('/') }}">Torna alla Home</a>
                    {{-- PULSANTE INVIO FORM --}}
                    <div class="form-group">
                        <button type="submit" class="btn btn-success ml-5">Invia Richiesta</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
