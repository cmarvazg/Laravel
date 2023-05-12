@extends('layouts.master')

@section('title', 'Transacciones')
@section('content')
@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
    <a href="{{route('transaction.create')}}" class="btn btn-primary mt-3 mb-1">Agregar</a>
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
            @foreach ($transactions as $transaction)  
            <tr>
                <th scope="row" class="text-center">{{ $transaction->id }}</th>
                <td class="text-center">{{ $transaction->person->rfc }}</td>
                <td class="text-center">{{ $transaction->type_transaction->type }}</td>
                <td class="text-center">
                    <a href="{{route('transaction.show', $transaction->id)}}" class="btn btn-primary">Mostrar</a>
                    <a href="{{route('transaction.edit', $transaction->id)}}" class="btn btn-primary">Editar</a>
                </td>
                <td class="text-center">
                    <form action="{{route('transaction.destroy', $transaction->id)}}" method = "post" onsubmit="return confirm('¿Estás seguro de que quieres eliminar la transacción {{ $transaction->id }}?');">
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
        {{$transactions->links()}}
    </nav>
@endsection