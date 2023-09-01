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
                <form action="{{ route('admin.contact.store') }}" method="POST">
                    @csrf
                    {{-- CAMPO NOME --}}
                    <div class="mb-3">
                        <label for="name" class="form-label"><strong><em>Il tuo nome: </em></strong> </label>
                        <input type="text" class="form-control" id="name" placeholder="Mario">
                    </div>
                    {{-- CAMPO COGNOME --}}
                    <div class="mb-3">
                        <label for="surname" class="form-label"><strong><em>Il tuo cognome: </em></strong> </label>
                        <input type="text" class="form-control" id="surname" placeholder="Rossi">
                    </div>
                    {{-- CAMPO E-MAIL --}}
                    <div class="mb-3">
                        <label for="email" class="form-label"><strong><em>Indirizzo Mail: </em></strong> </label>
                        <input type="email" class="form-control" id="email" placeholder="nome@esempio.com">
                    </div>
                    {{-- CAMPO TESTO INFORMAZIONI --}}
                    <div class="mb-3">
                        <label for="infotext" class="form-label"><strong><em>Richieste e info: </em></strong></label>
                        <textarea class="form-control" id="infotext" rows="3"></textarea>
                    </div>
                </form>
                {{-- FINE FORM --}}
                {{-- SEZIONE PULSANTI --}}
                <div class="col-12 d-flex justify-content-between">
                    {{-- PULSANTE RITORNO HOME --}}
                    <a class="btn btn-md btn-primary" href="{{ {{ url('/') }} }}">Torna alla Home</a>
                    {{-- PULSANTE INVIO FORM --}}
                    <div class="form-group">
                        <button type="submit" class="btn btn-success ml-5">Invia Richiesta</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
