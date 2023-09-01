@extends('layouts.admin')
@section('content')
<div class="container">
        <div class="row">
            <div class="col-9 my-5">
                <button type="button" class="btn btn-primary">
                    <a href="{{route('admin.animals.create')}}" class="link-underline link-underline-opacity-0 link-light">
                        Aggiungi Paziente
                    </a>
                </button>
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">ID</th>
                      <th scope="col">Nome</th>
                      <th scope="col">Specie</th>
                      <th scope="col">Data di Nascita</th>
                      <th scope="col">Genere</th>
                      <th scope="col">Proprietario</th>
                      <th scope="col">Azioni</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($animals as $animal)
                    <tr>
                      <td>{{ $animal->id }}</td>
                      <td>{{ $animal->name }}</td>
                      <td>{{ $animal->specie }}</td>
                      <td>{{ $animal->date_of_birth }}</td>
                      <td>
                            @if($animal->genre)
                                maschio
                            @else
                                femmina
                            @endif
                        </td>
                      <td>{{ $animal->owner }}</td>
                      <td>
                        <button type="button" class="btn btn-primary">
                            <a href="{{route('admin.animals.show', $animal->id)}}" class="link-underline link-underline-opacity-0 link-light">
                                <i class="fas fa-eye"></i>
                            </a>
                        </button>
                        <form action="{{ route('admin.animals.destroy', $animal->id) }}" method="post" class="d-inline">
                          @csrf
                          @method('DELETE')
                        <button type="submit" class="btn btn-danger"><i class="fas fa-trash-can"></i></button>
                        </form>                          
                      <button type="button" class="btn btn-warning"><a href="{{ route('admin.animals.edit', $animal->id) }}" class="link-underline link-underline-opacity-0 link-dark"><i class="fas fa-pen"></i></a></button>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection