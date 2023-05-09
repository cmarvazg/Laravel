@extends('layouts.master')

@section('title', 'Mostrar post')
@section('content')
    <div class="text-bg-dark text-center p-1 mt-5">
        <h1>Post</h1>
        <p><strong>Título:</strong> {{ $post->title }}</p>
        <p><strong>Url clean:</strong> {{ $post->url_clean}}</p>
        <p><strong>Contenido:</strong> {{ $post->content}}</p>
    </div>
@endsection
