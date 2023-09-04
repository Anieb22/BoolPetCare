@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col">
                <div class="card">
                    <div class="card-body bg-dark text-light">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        Hai eseguito l'accesso!
                    </div>
                </div>
            </div>
        </div>
        <div class="col-9 d-flex justify-content-between mt-5 mb-4">
                <a class="btn btn-md btn-success" href="{{ route('admin.animals.index') }}">Vai alla Dashboard</a>
    </div>
@endsection
