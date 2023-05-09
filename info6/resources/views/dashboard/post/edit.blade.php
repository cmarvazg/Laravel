@extends('layouts.master')

@section('title', 'Editar post')
@section('content')
    @include('fragments.validation-errors')
    @include('fragments.session')
    <form action="{{route('post.update', $post->id)}}" method="POST">
        @method('PUT')
       @include('dashboard.post._form')
    </form>
@endsection
