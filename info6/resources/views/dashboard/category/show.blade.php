@extends('layouts.master')

@section('title', 'Mostrar categoría')
@section('content')
    <div class="text-bg-dark text-center p-1 mt-5">
        <h1>Categoría</h1>
        <p><strong>Nombre:</strong> {{ $category->name }}</p>
    </div>
@endsection
