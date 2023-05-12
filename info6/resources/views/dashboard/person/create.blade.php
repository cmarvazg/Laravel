@extends('layouts.master')

@section('title', 'Crear persona')
@section('content')
    @include('fragments.validation-errors')
    @include('fragments.session')
    <form action="{{route('person.store')}}" method="POST">
       @include('dashboard.person._form')
    </form>
@endsection
