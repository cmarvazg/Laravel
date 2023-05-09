@extends('layouts.master')

@section('title', 'Crear categoría')
@section('content')
    @include('fragments.validation-errors')
    @include('fragments.session')
    <form action="{{route('category.store')}}" method="POST">
       @include('dashboard.category._form')
    </form>
@endsection
