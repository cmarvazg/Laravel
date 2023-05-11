@extends('layouts.master')

@section('title', 'Mostrar transaccion')
@section('content')
    <div class="text-bg-dark text-center p-1 mt-5">
        <h1>Transacción</h1>
        <p><strong>Tipo:</strong> {{ $transaccion->tipo_transaccion->tipo }}</p>
        <p><strong>Persona:</strong> {{ $transaccion->persona->rfc }}</p>
        <p><strong>Monto:</strong> {{ $transaccion->monto }}</p>
        <p><strong>Fecha:</strong> {{ $transaccion->fecha }}</p>
        <p><strong>Método:</strong> {{ $transaccion->metodo }}</p>
        <p><strong>Referencia:</strong> {{ $transaccion->referencia }}</p>
    </div>
@endsection
