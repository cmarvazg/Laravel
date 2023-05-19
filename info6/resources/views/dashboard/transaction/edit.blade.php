@extends('layouts.master')

@section('title', 'Editar transacción')
@section('content')
    @include('fragments.validation-errors')
    @include('fragments.session')
    <form action="{{route('transaction.update', $transaction->id)}}" method="POST">
        @method('PUT')
        @include('dashboard.transaction._form')
    </form>
@endsection
