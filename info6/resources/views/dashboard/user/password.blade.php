@extends('layouts.master')

@section('title', 'Nueva contraseña')
@section('content')
    @include('fragments.validation-errors')
    @include('fragments.session')
    <div class="alert alert-info" role="alert">
        Debes establecer una nueva contraseña para poder continuar.
    </div>
    <form action="{{route('user.setNewPassword', $user->id)}}" method="POST">
        @method('PUT')
        @csrf
        <div class="mb-3 mt-3">
            <label for="password" class="form-label fw-bold">Contraseña</label>
            <div class="input-group">
                <input type="password" class="form-control" id="password" name="password" aria-describedby="password">
                <button type="button" class="btn btn-danger" id="showPasswordBtn">Mostrar</button>
            </div>

            <script>
                const showPasswordBtn = document.getElementById('showPasswordBtn');
                const passwordInput = document.getElementById('password');
                showPasswordBtn.addEventListener('click', () => {
                    if (passwordInput.type === 'password') {
                        passwordInput.type = 'text';
                        showPasswordBtn.textContent = 'Ocultar';
                    } else {
                        passwordInput.type = 'password';
                        showPasswordBtn.textContent = 'Mostrar';
                    }
                });
            </script>
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
@endsection
