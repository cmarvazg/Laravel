@extends('layouts.master')

@section('title', 'Mostrar usuario')
@section('content')
    <div class="text-bg-dark text-center p-1 mt-5">
        <h1>Usuario</h1>
        <p><strong>Nombre:</strong> {{ $user->name }}</p>
        <p><strong>Apellido paterno:</strong> {{ $user->dad_last_name }}</p>
        <p><strong>Apellido materno:</strong> {{ $user->mom_last_name }}</p>
        <p><strong>Role:</strong> {{ $user->role->role }}</p>
        <p><strong>Email:</strong> {{ $user->email }}</p>
        @if (session('tempPassword'))
        <div class="alert alert-success" role="alert">
            Se asignó la contraseña temporal 
                <strong>{{ session('tempPassword') }}</strong> 
            a este usuario
        </div>
        @endif
        <a href="{{ route('user.index') }}" class="btn btn-primary">Aceptar</a>
        <br><br>
    </div>
@endsection
