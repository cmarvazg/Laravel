@extends('layouts.master')

@section('title', 'Mostrar persona')
@section('content')
    <div class="text-bg-dark text-center p-1 mt-5">
        <h1>Persona</h1>
        <p><strong>Tipo:</strong> {{ $person->type_person->type }}</p>
        <p><strong>Proyecto:</strong> {{ $person->proyect->name }}</p>
        <p><strong>Razón social:</strong> {{ $person->business_name }}</p>
        <p><strong>Persona:</strong> {{ $person->person }}</p>
        <p><strong>RFC:</strong> {{ $person->rfc }}</p>
        <p><strong>Domicilio:</strong> {{ $person->home }}</p>
        <p><strong>Email:</strong> {{ $person->email }}</p>
        <p><strong>Teléfono:</strong> {{ $person->phone }}</p>
        <a href="{{ route('person.index') }}" class="btn btn-primary">Aceptar</a>
        <br><br>
    </div>
@endsection
