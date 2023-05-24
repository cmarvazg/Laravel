@extends('layouts.master')

@section('title', 'Editar Usuario')
@section('content')
    @include('fragments.validation-errors')
    @include('fragments.session')
    <form action="{{ route('user.update', $user->id) }}" method="POST">
        @method('PUT')
        @csrf
        <div class="row mt-3">
            <div class="mb-3 col-xxl-4 col-xl-4 col-lg-5">
                <label for="name" class="form-label fw-bold">Nombre(s)</label>
                <input type="text" class="form-control" id="name" name="name" aria-describedby="name" value="{{ old('name', $user->name) }}">
            </div>
            <div class="mb-3 col-xxl-4 col-xl-4 col-lg-5">
                <label for="dad_last_name" class="form-label fw-bold">Apellido paterno</label>
                <input type="text" class="form-control" id="dad_last_name" name="dad_last_name" aria-describedby="dad_last_name" value="{{ old('dad_last_name', $user->dad_last_name) }}">
            </div>
            <div class="mb-3 col-xxl-4 col-xl-4 col-lg-5">
                <label for="mom_last_name" class="form-label fw-bold">Apellido materno</label>
                <input type="text" class="form-control" id="mom_last_name" name="mom_last_name" aria-describedby="mom_last_name" value="{{ old('mom_last_name', $user->mom_last_name) }}">
            </div>
        </div>
        <div class="row">
            <div class="mb-3 col-xxl-4 col-xl-6 col-lg-5">
                <label for="role_id" class="form-label fw-bold">Rol</label>
                <select class="form-select" id="role_id" name="role_id">
                    <option value="1" {{ old('role_id', $user->role_id) == 1 ? 'selected' : '' }}>Administrador</option>
                    <option value="2" {{ old('role_id', $user->role_id) == 2 ? 'selected' : '' }}>Usuario</option>
                </select>
            </div>
            <div class="mb-3 col-xxl-4 col-xl-6 col-lg-5">
                <label for="email" class="form-label fw-bold">Email</label>
                <input type="text" class="form-control" id="email" name="email" aria-describedby="email" value="{{ old('email', $user->email) }}">
            </div>
        </div>
        @if ($user->role_id == 2)
            <div class="mb-3 col-xxl-4 col-xl-12 col-lg-12">
                <label for="proyect_id" class="form-label fw-bold">Proyecto</label>
                <select class="form-select" id="proyect_id" name="proyect_id" aria-describedby="proyect_id">
                    <option value="" selected>Seleccione una opción</option>
                    @foreach (App\Models\Proyect::all() as $proyect)
                    <option value="{{ $proyect->id }}" {{ old('proyect_id',$user->proyect_id) == $proyect->id ? 'selected' : '' }}>{{ $proyect->name }}</option>
                    @endforeach
                </select>
            </div>
        @endif
        <div class="text-center mb-3">
            <button type="submit" class="btn btn-primary">Guardar</button>
            <a href="{{ route('user.index') }}" class="btn btn-danger">Cancelar</a>
        </div>
        </form>
@endsection
