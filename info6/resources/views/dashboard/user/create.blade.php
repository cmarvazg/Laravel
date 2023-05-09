@extends('layouts.master')

@section('title', 'Crear usuario')
@section('content')
    @include('fragments.validation-errors')
    @include('fragments.session')
    <form action="{{route('user.store')}}" method="POST">
       @include('dashboard.user._form')
    </form>
@endsection
