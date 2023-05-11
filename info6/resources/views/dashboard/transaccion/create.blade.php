@extends('layouts.master')

@section('title', 'Crear transacción')
@section('content')
    @include('fragments.validation-errors')
    @include('fragments.session')
    <form action="{{route('transaccion.store')}}" method="POST">
       @include('dashboard.transaccion._form')
    </form>
@endsection
