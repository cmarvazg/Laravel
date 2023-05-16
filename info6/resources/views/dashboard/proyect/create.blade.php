@extends('layouts.master')

@section('title', 'Crear proyecto')
@section('content')
    @include('fragments.validation-errors')
    @include('fragments.session')
    <form action="{{route('proyect.store')}}" method="POST">
       @include('dashboard.proyect._form')
    </form>
@endsection
