@extends('layouts.master')

@section('title', 'Editar proyecto')
@section('content')
    @include('fragments.validation-errors')
    @include('fragments.session')
    <form action="{{route('proyect.update', $proyect->id)}}" method="POST">
        @method('PUT')
        @include('dashboard.proyect._form')
    </form>
@endsection
