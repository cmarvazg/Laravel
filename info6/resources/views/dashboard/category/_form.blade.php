@csrf
<div class="mb-3 mt-3">
    <label for="name" class="form-label">Nombre</label>
    <input type="text" class="form-control" id="name" name="name" aria-describedby="name" value="{{ old('name',$category->name)}}">
</div>
<button type="submit" class="btn btn-primary">Guardar</button>