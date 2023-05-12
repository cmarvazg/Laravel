@extends('layouts.master')

@section('title', 'Editar persona')
@section('content')
    @include('fragments.validation-errors')
    @include('fragments.session')
    <form action="{{route('person.update', $person->id)}}" method="POST">
        @method('PUT')
        @include('dashboard.person._form')
    </form>
@endsection
