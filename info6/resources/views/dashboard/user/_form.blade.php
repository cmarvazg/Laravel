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
    <label for="role_id" class="form-label fw-bold">Role</label>
    <select class="form-select" id="role_id" name="role_id">
        <option value="" selected>Seleccione una opción</option>
        <option value="1" {{ old('role_id', $user->role_id) === 1 ? 'selected' : '' }}>Administrador</option>
        <option value="2" {{ old('role_id', $user->role_id) === 2 ? 'selected' : '' }}>Usuario</option>
    </select>
</div>
<div class="mb-3 mt-3">
    <label for="email" class="form-label fw-bold">Email</label>
    <input type="text" class="form-control" id="email" name="email" aria-describedby="email" value="{{ old('email',$user->email)}}">
</div>
<div class="mb-3 mt-3">
    <label for="password" class="form-label fw-bold">Contraseña</label>
    <div class="input-group">
        <input type="password" class="form-control" id="password" name="password" aria-describedby="password">
        <button type="button" class="btn btn-danger" id="showPasswordBtn">Mostrar</button>
    </div>
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

<button type="submit" class="btn btn-primary">Guardar</button>