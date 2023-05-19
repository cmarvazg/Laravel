@csrf
<div class="mb-3 mt-3">
    <label for="name" class="form-label fw-bold">Nombre</label>
    <input type="text" class="form-control" id="name" name="name" aria-describedby="name" value="{{ old('name',$proyect->name)}}">
</div>
<div class="mb-3 mt-3">
    <label for="date" class="form-label fw-bold">Fecha de inicio</label>
    <input type="date" class="form-control" id="date" name="date" aria-describedby="date" value="{{ old('date',$proyect->date)}}">
</div>
<div class="mb-3 mt-3">
    <label for="subtotal" class="form-label fw-bold">Subtotal</label>
    <input type="text" class="form-control" id="subtotal" name="subtotal" aria-describedby="subtotal" value="{{ old('subtotal',$proyect->subtotal)}}">
</div>
<div class="mb-3 mt-3">
    <label for="concept" class="form-label fw-bold">Concepto</label>
    <input type="text" class="form-control" id="concept" name="concept" aria-describedby="concept" value="{{ old('concept',$proyect->concept)}}">
</div>
<div class="mb-3 mt-3">
    <label for="comment" class="form-label fw-bold">Comentario</label>
    <textarea class="form-control" id="comment" name="comment" cols="30" rows="5">{{ old('comment',$proyect->comment)}}</textarea>
</div>

<button type="submit" class="btn btn-primary">Guardar</button>
<a href="{{ route('proyect.index') }}" class="btn btn-danger">Cancelar</a>
<br><br><br>