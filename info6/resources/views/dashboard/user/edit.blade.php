@extends('layouts.master')

@section('title', 'Editar Usuario')
@section('content')
    @include('fragments.validation-errors')
    @include('fragments.session')
    <form action="{{route('user.update', $user->id)}}" method="POST">
        @method('PUT')
        @csrf
        @csrf
        <div class="mb-3 mt-3">
            <label for="name" class="form-label fw-bold">Nombre(s)</label>
            <input type="text" class="form-control" id="name" name="name" aria-describedby="name" value="{{ old('name',$user->name)}}">
        </div>
        <div class="mb-3 mt-3">
            <label for="dad_last_name" class="form-label fw-bold">Apellido paterno</label>
            <input type="text" class="form-control" id="dad_last_name" name="dad_last_name" aria-describedby="dad_last_name" value="{{ old('dad_last_name',$user->dad_last_name)}}">
        </div>
        <div class="mb-3 mt-3">
            <label for="mom_last_name" class="form-label fw-bold">Apellido materno</label>
            <input type="text" class="form-control" id="mom_last_name" name="mom_last_name" aria-describedby="mom_last_name" value="{{ old('mom_last_name',$user->mom_last_name)}}">
        </div>
        <div class="mb-3 mt-3">
            <label for="role_id" class="form-label fw-bold">Rol</label>
            <select class="form-select" id="role_id" name="role_id">
                <option value="1" {{ old('role_id', $user->role_id) === 1 ? 'selected' : '' }}>Administrador</option>
                <option value="2" {{ old('role_id', $user->role_id) === 2 ? 'selected' : '' }}>Usuario</option>
                
            </select>
        </div>
        <div class="mb-3 mt-3">
            <label for="email" class="form-label fw-bold">Email</label>
            <input type="text" class="form-control" id="email" name="email" aria-describedby="email" value="{{ old('email',$user->email)}}">
        </div>

        <button type="submit" class="btn btn-primary">Guardar</button>
        <a href="{{ route('user.index') }}" class="btn btn-danger">Cancelar</a>
        <br><br><br>
    </form>
@endsection

