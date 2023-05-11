@extends('layouts.master')

@section('title', 'Editar transacción')
@section('content')
    @include('fragments.validation-errors')
    @include('fragments.session')
    <form action="{{route('transaccion.update', $transaccion->id)}}" method="POST">
        @method('PUT')
        @include('dashboard.transaccion._form')
    </form>
@endsection
