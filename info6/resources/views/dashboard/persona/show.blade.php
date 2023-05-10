@extends('layouts.master')

@section('title', 'Mostrar persona')
@section('content')
    <div class="text-bg-dark text-center p-1 mt-5">
        <h1>Persona</h1>
        <p><strong>Tipo:</strong> {{ $persona->tipo_persona->tipo }}</p>
        <p><strong>Razón social:</strong> {{ $persona->razon_social }}</p>
        <p><strong>Persona:</strong> {{ $persona->persona }}</p>
        <p><strong>RFC:</strong> {{ $persona->rfc }}</p>
        <p><strong>Domicilio:</strong> {{ $persona->domicilio }}</p>
        <p><strong>Email:</strong> {{ $persona->email }}</p>
        <p><strong>Teléfono:</strong> {{ $persona->telefono }}</p>
    </div>
@endsection
