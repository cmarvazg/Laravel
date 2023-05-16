@extends('layouts.master')

@section('title', 'Crear transacción')
@section('content')
    @include('fragments.validation-errors')
    @include('fragments.session')
    <form action="{{route('transaction.store')}}" method="POST">
        @include('dashboard.transaction._form')
        <button type="submit" class="btn btn-primary">Guardar</button>
        <a href="{{ route('proyect.index') }}" class="btn btn-danger">Cancelar</a>
        <br><br><br>
    </form>
@endsection
