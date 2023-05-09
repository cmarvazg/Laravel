@extends('layouts.master')

@section('title', 'Editar categoría')
@section('content')
    @include('fragments.validation-errors')
    @include('fragments.session')
    <form action="{{route('category.update', $category->id)}}" method="POST">
        @method('PUT')
       @include('dashboard.category._form')
    </form>
@endsection
