@extends('layouts.admin')
@section('content')
    <div class="container">
        <div class="row">
            <!--INDEX DESKTOP-->
            <div class="col-xxl-12 col-xl-6 my-5 d-none d-lg-block">
                <div class="col-12">
                <button type="button" class="btn btn-md btn-success">
                    <a href="{{ route('admin.animals.create') }}" class="link-underline link-underline-opacity-0 link-light">
                        Aggiungi Pet
                    </a>
                </button>
                <button type="button" class="btn btn-md btn-warning mx-5">
                    <a href="{{ url('/') }}"
                        class="link-underline link-underline-opacity-0 link-light text-black">Torna alla Home Page</a>
                </button>
                </div>
                <table class="table rounded rounded-5 mt-4 table-dark">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Specie</th>
                            <th scope="col">Data di Nascita</th>
                            <th scope="col">Genere</th>
                            <th scope="col">Vaccinazioni</th>
                            <th scope="col">Proprietario</th>
                            <th scope="col">Azioni</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($animals as $animal)
                            <tr>
                                <td>{{ $animal->id }}</td>
                                <td>{{ $animal->name }}</td>
                                <td>{{ $animal->specie }}</td>
                                <td>{{ $animal->date_of_birth }}</td>
                                <td>
                                    @if ($animal->genre)
                                        maschio
                                    @else
                                        femmina
                                    @endif
                                </td>
                                <td>
                                    @if ($animal->vaccinations->isEmpty())
                                        Nessuna vaccinazione
                                    @else
                                        @foreach ($animal->vaccinations as $vaccination)
                                            {{ $vaccination->type }}
                                            {{-- @if (!$loop->last)
                                                <br>
                                            @endif -NON CANCELLARE- --}}
                                        @endforeach
                                    @endif
                                </td>
                                <td>{{ $animal->owner }}</td>
                                <td>
                                        <a href="{{ route('admin.animals.show', ['animal' => $animal]) }}"
                                            class="link-underline link-underline-opacity-0 link-light btn btn-success">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                        <a href="{{ route('admin.animals.edit', ['animal' => $animal]) }}"
                                            class="link-underline link-underline-opacity-0 link-dark btn btn-warning">
                                            <i class="fas fa-pen"></i>
                                        </a>
                                    <form action="{{ route('admin.animals.destroy', ['animal' => $animal]) }}"
                                        method="post" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger"><i
                                                class="fas fa-trash-can"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!--INDEX MOBILE-->
            <div class="col-12 my-3 d-xl-none d-flex justify-content-between">
                <button type="button" class="btn btn-md btn-success">
                    <a href="{{ route('admin.animals.create') }}" class="link-underline link-underline-opacity-0 link-light">
                        Aggiungi Pet
                    </a>
                </button>
                <button type="button" class="btn btn-md btn-warning">
                    <a href="{{ url('/') }}"
                        class="link-underline link-underline-opacity-0 link-light text-black">Torna alla Home Page</a>
                </button>
            </div>
            <div class="col-12 d-lg-none d-block">
                @foreach ($animals as $animal)
                <button class="btn col-12 d-block btn btn-outline-success" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample{{ $animal->id }}" aria-expanded="false" aria-controls="collapseExample">
                {{ $animal->id }} - {{ $animal->name }}
                  </button>
                </p>
                <div class="collapse" id="collapseExample{{ $animal->id }}">
                  <div class="card card-body bg-dark text-light border-light">
                    <tr>
                        <th scope="col">Specie:</th>
                        <td>{{ $animal->specie }}</td>
                    </tr> <br>
                    <hr> 
                    <tr>
                        <th scope="col">Data Di Nascita:</th>
                        <td>{{ $animal->date_of_birth }}</td>
                    </tr><br>
                    <hr> 
                    <tr>
                        <th scope="col">Genere:</th>
                        <td>
                        @if ($animal->genre)
                            maschio
                        @else
                            femmina
                        @endif
                        </td><br>
                    </tr>
                    <hr> 
                    <tr>
                        <th scope="col">Vaccinazione:</th>
                        <td>
                        @if ($animal->vaccinations->isEmpty())
                            Nessuna vaccinazione
                        @else
                            @foreach ($animal->vaccinations as $vaccination)
                                {{ $vaccination->type }}
                                {{-- @if (!$loop->last)
                                    <br>
                                @endif -NON CANCELLARE- --}}
                            @endforeach
                        @endif
                        </td><br>
                    </tr>
                    <hr> 
                    <tr>
                        <th scope="col">Proprietario:</th>
                        <td>{{ $animal->owner }}</td>
                    </tr><br>
                    <hr> 
                    <tr class="col-12 d-flex flex-row">
                        <th scope="col">Azioni:</th>
                        <td>
                            <div class="col-12 d-flex justify-content-around">
                                <a href="{{ route('admin.animals.show', ['animal' => $animal]) }}"
                                        class="link-underline link-underline-opacity-0 link-light btn btn-success">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <a href="{{ route('admin.animals.edit', ['animal' => $animal]) }}"
                                        class="link-underline link-underline-opacity-0 link-dark btn btn-warning">
                                        <i class="fas fa-pen"></i>
                                    </a>
                                <form action="{{ route('admin.animals.destroy', ['animal' => $animal]) }}"
                                    method="post" class="d-inline col-1">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger"><i
                                            class="fas fa-trash-can"></i></button>
                                </form>
                            </div>
                        </td>
                    </tr>
                  </div>
                </div>

                @endforeach

            </div>
        </div>
    </div>
@endsection
