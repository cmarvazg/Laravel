@extends('layouts.master')

@section('title', 'Transacciones')
@section('content')
    <a href="{{route('transaccion.create')}}" class="btn btn-primary mt-3 mb-1">Agregar</a>
    <table class="table table-dark table-striped mt-3">
        <thead>
            <tr>
                <th scope="col" class="text-center">ID</th>
                <th scope="col" class="text-center">RFC persona</th>
                <th scope="col" class="text-center">Tipo de transacción</th>
                <th scope="col" class="text-center">Opciones</th>
                <th scope="col" class="text-center">Eliminar</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($transacciones as $transaccion)  
            <tr>
                <th scope="row" class="text-center">{{ $transaccion->id }}</th>
                <td class="text-center">{{ $transaccion->persona->rfc }}</td>
                <td class="text-center">{{ $transaccion->tipo_transaccion->tipo }}</td>
                <td class="text-center">
                    <a href="{{route('transaccion.show', $transaccion->id)}}" class="btn btn-primary">Mostrar</a>
                    <a href="{{route('transaccion.edit', $transaccion->id)}}" class="btn btn-primary">Editar</a>
                </td>
                <td class="text-center">
                    <form action="{{route('transaccion.destroy', $transaccion->id)}}" method = "post">
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
        {{$transacciones->links()}}
    </nav>
@endsection