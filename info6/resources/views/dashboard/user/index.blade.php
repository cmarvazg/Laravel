@extends('layouts.master')

@section('title', 'Usuarios')
@section('content')
@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
    <a href="{{route('user.create')}}" class="btn btn-primary mt-3 mb-1">Nuevo usuario</a>
    <table class="table table-dark table-striped mt-3">
        <thead>
            <tr>
                <th scope="col" class="text-center">ID</th>
                <th scope="col" class="text-center">Apellido paterno</th>
                <th scope="col" class="text-center">Apellido materno</th>
                <th scope="col" class="text-center">Role</th>
                <th scope="col" class="text-center">Opciones</th>
                <th scope="col" class="text-center">Eliminar</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)  
            <tr>
                <th scope="row" class="text-center">{{ $user->id }}</th>
                <td class="text-center">{{ $user->dad_last_name }}</td>
                <td class="text-center">{{ $user->mom_last_name }}</td>
                <td class="text-center">{{ $user->role->role }}</td>
                <td class="text-center">
                    <a href="{{route('user.show', $user->id)}}" class="btn btn-primary">Mostrar</a>
                    <a href="{{route('user.edit', $user->id)}}" class="btn btn-primary">Editar</a>
                    <a href="{{route('user.setTempPassword', $user->id)}}" class="btn btn-success">Restablecer contraseña</a>
                </td>
                <td class="text-center">
                    <form action="{{route('user.destroy', $user->id)}}" method="post" onsubmit="return confirm('¿Estás seguro de que quieres eliminar el usuario {{ $user->id }}?');">
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
        {{$users->links()}}
    </nav>
@endsection
