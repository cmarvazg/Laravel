@extends('layouts.master')

@section('title', 'Mostrar proyecto')
@section('content')
    <div class="text-bg-dark text-center p-1 mt-5">
        <h1>Proyecto</h1>
        <p><strong>Nombre:</strong> {{ $proyect->name }}</p>
        <p><strong>Fecha de inicio:</strong> {{ $proyect->date}}</p>
        <p><strong>Subtotal:</strong> {{ $proyect->subtotal }}</p>
        <p><strong>IVA:</strong> {{ $proyect->iva }}</p>
        <p><strong>Total:</strong> {{ $proyect->total }}</p>
        <p><strong>Concepto:</strong> {{ $proyect->concept }}</p>
        <p><strong>Comentarios:</strong> {{ $proyect->comment }}</p>
        <a href="{{ route('proyect.index') }}" class="btn btn-primary">Aceptar</a>
        <br><br>
    </div>
@endsection
