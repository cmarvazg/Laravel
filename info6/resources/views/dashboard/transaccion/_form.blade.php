@csrf
<div class="mb-3 mt-3">
    <label for="tipo_transaccion_id" class="form-label fw-bold">Tipo</label>
    <select class="form-select" id="tipo_transaccion_id" name="tipo_transaccion_id">
        <option value="" selected>Seleccione una opción</option>
        <option value="1" {{ old('tipo_transaccion_id', $transaccion->tipo_transaccion_id) === 1 ? 'selected' : '' }}>Anticipo</option>
        <option value="2" {{ old('tipo_transaccion_id', $transaccion->tipo_transaccion_id) === 2 ? 'selected' : '' }}>Pago</option>
    </select>
</div>
<div class="mb-3 mt-3">
    <label for="persona_id" class="form-label fw-bold">Persona</label>
    <select class="form-select" id="persona_id" name="persona_id" aria-describedby="persona">
        @foreach(App\Models\Persona::all() as $persona)
            <option value="{{ $persona->id }}" {{ old('persona_id',$transaccion->persona_id) == $persona->id ? 'selected' : '' }}>{{ $persona->rfc }}</option>
        @endforeach
    </select>
</div>
<div class="mb-3 mt-3">
    <label for="monto" class="form-label fw-bold">Monto</label>
    <input type="text" class="form-control" id="monto" name="monto" aria-describedby="monto" value="{{ old('monto',$transaccion->monto)}}">
</div>
<div class="mb-3 mt-3">
    <label for="fecha" class="form-label fw-bold">Fecha</label>
    <input type="date" class="form-control" id="fecha" name="fecha" aria-describedby="fecha" value="{{ old('fecha',$transaccion->fecha)}}">
</div>
<div class="mb-3 mt-3">
    <label for="metodo" class="form-label fw-bold">Método</label>
    <select class="form-select" id="metodo" name="metodo">
        <option value="" selected>Seleccione una opción</option>
        <option value="Depósito" {{ old('metodo', $transaccion->metodo) === 'Depósito' ? 'selected' : '' }}>Depósito</option>
        <option value="Transferencia" {{ old('metodo', $transaccion->metodo) === 'Transferencia' ? 'selected' : '' }}>Transferencia</option>
    </select>
</div>
<div class="mb-3 mt-3">
    <label for="referencia" class="form-label fw-bold">Referencia</label>
    <input type="text" class="form-control" id="referencia" name="referencia" aria-describedby="referencia" value="{{ old('referencia',$transaccion->referencia)}}">
</div>

<button type="submit" class="btn btn-primary">Guardar</button>
<br><br><br>