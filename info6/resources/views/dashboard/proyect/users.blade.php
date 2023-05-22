@extends('layouts.master')

@section('title', 'Usuarios del proyecto')

@section('content')
    <h1 class="text-center mt-3">Usuarios del Proyecto: {{ $proyect->name }}</h1>
    
    <table class="table table-dark table-striped mt-3">
        <thead>
            <tr>
                <th scope="col" class="text-center">ID</th>
                <th scope="col" class="text-center">Nombre</th>
                <th scope="col" class="text-center">Apellido paterno</th>
                <th scope="col" class="text-center">Apellido materno</th>                
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td class="text-center">{{ $user->id }}</td>
                    <td class="text-center">{{ $user->name }}</td>
                    <td class="text-center">{{ $user->dad_last_name }}</td>
                    <td class="text-center">{{ $user->mom_last_name }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="text-center">
        <a href="{{ route('proyect.index') }}" class="btn btn-primary">Aceptar</a>
    </div>
@endsection
