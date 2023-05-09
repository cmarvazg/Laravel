@extends('layouts.master')

@section('title', 'Posts')
@section('content')
    <a href="{{route('post.create')}}" class="btn btn-primary mt-3 mb-1">Agregar</a>
    <table class="table table-dark table-striped mt-3">
    <thead>
        <tr>
            <th scope="col" class="text-center">ID</th>
            <th scope="col" class="text-center">Título</th>
            <th scope="col" class="text-center">Url Clean</th>
            <th scope="col" class="text-center">Contenido</th>
            <th scope="col" class="text-center">Opciones</th>
            <th scope="col" class="text-center">Eliminar</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($posts as $post)
        <tr>
            <th scope="row" class="text-center">{{ $post->id }}</th>
            <td class="text-center">{{ $post->title }}</td>
            <td class="text-center">{{ $post->url_clean }}</td>
            <td class="text-center">{{ $post->content }}</td>
            <td class="text-center">
                <a href="{{route('post.show', $post->id)}}" class="btn btn-primary">Mostrar</a>
                <a href="{{route('post.edit', $post->id)}}" class="btn btn-primary">Editar</a>
            </td>
            <td class="text-center">
                <form action="{{route('post.destroy', $post->id)}}" method = "post">
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
        {{$posts->links()}}
    </nav>
@endsection