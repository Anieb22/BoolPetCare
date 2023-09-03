@extends('layouts.admin')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-9 my-5">
                <button type="button" class="btn btn-md btn-success">
                    <a href="{{ route('admin.animals.create') }}" class="link-underline link-underline-opacity-0 link-light">
                        Aggiungi Pet
                    </a>
                </button>
                <button type="button" class="btn btn-md btn-warning mx-5">
                    <a href="{{ route('homepage') }}"
                        class="link-underline link-underline-opacity-0 link-light text-black">Torna alla Home Page</a>
                </button>
                <table class="table rounded rounded-5 mt-4">
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
                                    <button type="button" class="btn btn-primary">
                                        <a href="{{ route('admin.animals.show', ['animal' => $animal]) }}"
                                            class="link-underline link-underline-opacity-0 link-light">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                    </button>
                                    <form action="{{ route('admin.animals.destroy', ['animal' => $animal]) }}"
                                        method="post" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger"><i
                                                class="fas fa-trash-can"></i></button>
                                    </form>
                                    <button type="button" class="btn btn-warning">
                                        <a href="{{ route('admin.animals.edit', ['animal' => $animal]) }}"
                                            class="link-underline link-underline-opacity-0 link-dark">
                                            <i class="fas fa-pen"></i>
                                        </a>
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
