@extends('layouts.master')

@section('title', 'Categorías')
@section('content')
    <a href="{{route('category.create')}}" class="btn btn-primary mt-3 mb-1">Agregar</a>
    <table class="table table-dark table-striped mt-3">
        <thead>
            <tr>
                <th scope="col" class="text-center">ID</th>
                <th scope="col" class="text-center">Nombre</th>
                <th scope="col" class="text-center">Opciones</th>
                <th scope="col" class="text-center">Eliminar</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)  
            <tr>
                <th scope="row" class="text-center">{{ $category->id }}</th>
                <td class="text-center">{{ $category->name }}</td>
                <td class="text-center">
                    <a href="{{route('category.show', $category->id)}}" class="btn btn-primary">Mostrar</a>
                    <a href="{{route('category.edit', $category->id)}}" class="btn btn-primary">Editar</a>
                </td>
                <td class="text-center">
                    <form action="{{route('category.destroy', $category->id)}}" method = "post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <nav class="pagination justify-content-center">
        {{$categories->links()}}
    </nav>
@endsection