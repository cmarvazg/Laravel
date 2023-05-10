@extends('layouts.master')

@section('title', 'Crear persona')
@section('content')
    @include('fragments.validation-errors')
    @include('fragments.session')
    <form action="{{route('persona.store')}}" method="POST">
       @include('dashboard.persona._form')
    </form>
@endsection
