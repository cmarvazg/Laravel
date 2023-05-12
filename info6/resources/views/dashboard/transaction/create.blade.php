@extends('layouts.master')

@section('title', 'Crear transacción')
@section('content')
    @include('fragments.validation-errors')
    @include('fragments.session')
    <form action="{{route('transaction.store')}}" method="POST">
       @include('dashboard.transaction._form')
    </form>
@endsection
