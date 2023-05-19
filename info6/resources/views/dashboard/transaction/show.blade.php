@extends('layouts.master')

@section('title', 'Mostrar transaccion')
@section('content')
    <div class="text-bg-dark text-center p-1 mt-5">
        <h1>Transacción</h1>
        <p><strong>Proyecto:</strong> {{ $transaction->proyect->name }}</p>
        <p><strong>Tipo:</strong> {{ $transaction->type_transaction->type }}</p>
        <p><strong>Persona:</strong> {{ $transaction->person->rfc }}</p>
        <p><strong>Monto:</strong> {{ $transaction->amount }}</p>
        <p><strong>Fecha:</strong> {{ $transaction->date }}</p>
        <p><strong>Método:</strong> {{ $transaction->method }}</p>
        <p><strong>Referencia:</strong> {{ $transaction->reference }}</p>
        <a href="{{ route('transaction.index') }}" class="btn btn-primary">Aceptar</a>
        <br><br>
    </div>
@endsection
