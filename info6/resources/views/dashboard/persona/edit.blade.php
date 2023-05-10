@extends('layouts.master')

@section('title', 'Editar persona')
@section('content')
    @include('fragments.validation-errors')
    @include('fragments.session')
    <form action="{{route('persona.update', $persona->id)}}" method="POST">
        @method('PUT')
        @include('dashboard.persona._form')
    </form>
@endsection
