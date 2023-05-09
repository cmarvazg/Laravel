@extends('layouts.master')

@section('title', 'Crear post')
@section('content')
    @include('fragments.validation-errors')
    @include('fragments.session')
    <form action="{{route('post.store')}}" method="POST">
       @include('dashboard.post._form')
    </form>
@endsection
