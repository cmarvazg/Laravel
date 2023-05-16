@extends('layouts.master')

@section('title', 'Editar transacción')
@section('content')
    @include('fragments.validation-errors')
    @include('fragments.session')
    <form action="{{route('transaction.update', $transaction->id)}}" method="POST">
        @method('PUT')
        @include('dashboard.transaction._form')
        <button type="submit" class="btn btn-primary">Guardar</button>
        <a href="{{ route('transaction.index') }}" class="btn btn-danger">Cancelar</a>
        <br><br><br>
    </form>
@endsection
