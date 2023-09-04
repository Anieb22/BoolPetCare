@extends('layouts.app')

{{-- FORM PER INSERIRE NUOVI PAZIENTI ANIMALI :3 --}}
@section('content')
    <div class="container d-flex justify-content-center">
        <div class="row">
            {{-- TITOLO PAGINA --}}
            <h2 class='m-3 text-light'><i><strong>Compila il form qui sotto per ricevere informazioni</strong></i></h2>
            <div class="col-12">
                @if ($errors->any())
                    <div class="alert alert-warning" role="alert">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
                @endif
                {{-- INIZIO FORM --}}
                <form class="mt-2 text-light" action="{{ route('contacts.store') }}" method="POST">
                    @csrf
                    {{-- CAMPO NOME --}}
                    <div class="mb-3 mt-3">
                        <label for="name" class="form-label"><strong><em>Il tuo nome: </em></strong> </label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Mario">
                    </div>
                    {{-- CAMPO COGNOME --}}
                    <div class="mb-3 mt-3">
                        <label for="surname" class="form-label"><strong><em>Il tuo cognome: </em></strong> </label>
                        <input type="text" class="form-control" name="surname" id="surname" placeholder="Rossi">
                    </div>
                    {{-- CAMPO E-MAIL --}}
                    <div class="mb-3 mt-3">
                        <label for="email" class="form-label"><strong><em>Indirizzo E-mail: </em></strong> </label>
                        <input type="email" class="form-control" name="email" id="email"
                            placeholder="nome@esempio.com">
                    </div>
                    {{-- CAMPO NUMERO DI TELEFONO --}}
                    <div class="mb-3 mt-3">
                        <label for="phone_number" class="form-label"><strong><em>Numero di telefono: </em></strong></label>
                        <input type="text" class="form-control" name="phone_number" id="phone_number"
                            placeholder="+39 333 3333333">
                    </div>
                    {{-- CAMPO TESTO INFORMAZIONI --}}
                    <div class="mb-3 mt-3">
                        <label for="textinfo" class="form-label"><strong><em>Inserisci di seguito la tua richiesta:
                                </em></strong></label>
                        <textarea type="text" class="form-control" name="textinfo" id="textinfo" placeholder="Bla Bla Bla Bla"></textarea>
                    </div>
                    {{-- FINE FORM --}}
                    {{-- SEZIONE PULSANTI --}}
                    <div class="col-12">
                        <div class="d-flex justify-content-between mt-5 mb-5">
                            {{-- PULSANTE RITORNO HOME --}}
                            <a class="btn btn-md btn-primary" href="{{ url('/') }}">
                                Torna alla Home
                            </a>
                            {{-- PULSANTE INVIO FORM --}}
                            <div class="form-group">
                                <button type="submit" class="btn btn-success ml-5">
                                    Invia Richiesta
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
@endsection
