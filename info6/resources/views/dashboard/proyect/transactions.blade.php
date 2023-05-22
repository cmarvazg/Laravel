@extends('layouts.master')

@section('title', 'Transacciones del proyecto')

@section('content')
    <h1 class="text-center mt-3">Transacciones del Proyecto: {{ $proyect->name }}</h1>
    
    <table class="table table-dark table-striped mt-3">
        <thead>
            <tr>
                <th scope="col" class="text-center">ID</th>
                <th scope="col" class="text-center">Tipo</th>
                <th scope="col" class="text-center">Persona</th>
                <th scope="col" class="text-center">Monto</th>
                <th scope="col" class="text-center">Fecha</th>
                <th scope="col" class="text-center">Método</th>
                <th scope="col" class="text-center">Referencia</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($transactions as $transaction)
                <tr>
                    <td class="text-center">{{ $transaction->id }}</td>
                    <td class="text-center">{{ $transaction->type_transaction->type }}</td>
                    <td class="text-center">{{ $transaction->person->rfc }}</td>
                    <td class="text-center">{{ $transaction->amount }}</td>
                    <td class="text-center">{{ $transaction->date }}</td>
                    <td class="text-center">{{ $transaction->method }}</td>
                    <td class="text-center">{{ $transaction->reference }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="text-center">
        <a href="{{ route('proyect.index') }}" class="btn btn-primary">Aceptar</a>
    </div>
@endsection
