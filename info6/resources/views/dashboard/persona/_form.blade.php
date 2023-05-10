@csrf
<div class="mb-3 mt-3">
    <label for="tipo_persona_id" class="form-label fw-bold">Tipo</label>
    <select class="form-select" id="tipo_persona_id" name="tipo_persona_id">
        <option value="" selected>Seleccione una opción</option>
        <option value="1" {{ old('tipo_persona_id', $persona->tipo_persona_id) === 1 ? 'selected' : '' }}>Cliente</option>
        <option value="2" {{ old('tipo_persona_id', $persona->tipo_persona_id) === 2 ? 'selected' : '' }}>Proveedor</option>
    </select>
</div>
<div class="mb-3 mt-3">
    <label for="razon_social" class="form-label fw-bold">Razón social</label>
    <input type="text" class="form-control" id="razon_social" name="razon_social" aria-describedby="razon_social" value="{{ old('razon_social',$persona->razon_social)}}">
</div>
<div class="mb-3 mt-3">
    <label for="persona" class="form-label fw-bold">Persona</label>
    <select class="form-select" id="persona" name="persona">
        <option value="" selected>Seleccione una opción</option>
        <option value="Física" {{ old('persona', $persona->persona) === 'Física' ? 'selected' : '' }}>Física</option>
        <option value="Moral" {{ old('persona', $persona->persona) === 'Moral' ? 'selected' : '' }}>Moral</option>
    </select>
</div>
<div class="mb-3 mt-3">
    <label for="rfc" class="form-label fw-bold">RFC</label>
    <input type="text" class="form-control" id="rfc" name="rfc" aria-describedby="rfc" value="{{ old('rfc',$persona->rfc)}}">
</div>
<div class="mb-3 mt-3">
    <label for="domicilio" class="form-label fw-bold">Domicilio</label>
    <input type="text" class="form-control" id="domicilio" name="domicilio" aria-describedby="domicilio" value="{{ old('domicilio',$persona->domicilio)}}">
</div>
<div class="mb-3 mt-3">
    <label for="email" class="form-label fw-bold">Email</label>
    <input type="text" class="form-control" id="email" name="email" aria-describedby="email" value="{{ old('email',$persona->email)}}">
</div>
<div class="mb-3 mt-3">
    <label for="telefono" class="form-label fw-bold">Teléfono</label>
    <input type="text" class="form-control" id="telefono" name="telefono" aria-describedby="telefono" value="{{ old('telefono',$persona->telefono)}}">
</div>

<button type="submit" class="btn btn-primary">Guardar</button>
<br><br><br>