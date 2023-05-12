@extends('layouts.master')

@section('title', 'Personas')
@section('content')
    <a href="{{route('person.create')}}" class="btn btn-primary mt-3 mb-1">Agregar</a>
    <table class="table table-dark table-striped mt-3">
        <thead>
            <tr>
                <th scope="col" class="text-center">ID</th>
                <th scope="col" class="text-center">Tipo</th>
                <th scope="col" class="text-center">RFC</th>
                <th scope="col" class="text-center">Opciones</th>
                <th scope="col" class="text-center">Eliminar</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($people as $person)  
            <tr>
                <th scope="row" class="text-center">{{ $person->id }}</th>
                <td class="text-center">{{ $person->type_person->type }}</td>
                <td class="text-center">{{ $person->rfc }}</td>
                <td class="text-center">
                    <a href="{{route('person.show', $person->id)}}" class="btn btn-primary">Mostrar</a>
                    <a href="{{route('person.edit', $person->id)}}" class="btn btn-primary">Editar</a>
                </td>
                <td class="text-center">
                    <form action="{{route('person.destroy', $person->id)}}" method = "post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
    </tbody>
    </table>
    <nav class="pagination justify-content-center">
        {{$people->links()}}
    </nav>
@endsection