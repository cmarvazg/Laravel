@extends('layouts.master')

@section('title', 'Proyectos')
@section('content')
@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
    <a href="{{route('proyect.create')}}" class="btn btn-primary mt-3 mb-1">Nuevo proyecto</a>
    <table class="table table-dark table-striped mt-3">
        <thead>
            <tr>
                <th scope="col" class="text-center">ID</th>
                <th scope="col" class="text-center">Nombre del proyecto</th>
                <th scope="col" class="text-center">Opciones</th>
                <th scope="col" class="text-center">Personas</th>
                <th scope="col" class="text-center">Transacciones</th>
                <th scope="col" class="text-center">Usuarios</th>
                <th scope="col" class="text-center">Eliminar</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($proyects as $proyect)  
            <tr>
                <th scope="row" class="text-center">{{ $proyect->id }}</th>
                <td class="text-center">{{ $proyect->name }}</td>
                <td class="text-center">
                    <a href="{{route('proyect.show', $proyect->id)}}" class="btn btn-primary">Mostrar</a>
                    <a href="{{route('proyect.edit', $proyect->id)}}" class="btn btn-primary">Editar</a>
                </td>
                <td class="text-center">
                    <a href="{{ route('proyect.showPeople', $proyect->id) }}" class="btn btn-info">Mostrar</a>
                </td>
                <td class="text-center">
                    <a href="{{ route('proyect.transactions', ['proyect' => $proyect->id]) }}" class="btn btn-info">Mostrar</a>
                </td>
                <td class="text-center">
                    <a href="{{ route('proyect.users', ['proyect' => $proyect->id]) }}" class="btn btn-info">Mostrar</a>
                </td>
                <td class="text-center">
                    <form action="{{route('proyect.destroy', $proyect->id)}}" method = "post" onsubmit="return confirm('¿Estás seguro de que quieres eliminar el proyecto {{ $proyect->id }}?');">
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
        {{$proyects->links()}}
    </nav>
@endsection