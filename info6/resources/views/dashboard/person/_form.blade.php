@csrf
<div class="mb-3 mt-3">
    <label for="type_person_id" class="form-label fw-bold">Tipo</label>
    <select class="form-select" id="type_person_id" name="type_person_id">
        <option value="" selected>Seleccione una opción</option>
        <option value="1" {{ old('type_person_id', $person->type_person_id) === 1 ? 'selected' : '' }}>Cliente</option>
        <option value="2" {{ old('type_person_id', $person->type_person_id) === 2 ? 'selected' : '' }}>Proveedor</option>
    </select>
</div>
<div class="mb-3 mt-3">
    <label for="business_name" class="form-label fw-bold">Razón social</label>
    <input type="text" class="form-control" id="business_name" name="business_name" aria-describedby="business_name" value="{{ old('business_name',$person->business_name)}}">
</div>
<div class="mb-3 mt-3">
    <label for="person" class="form-label fw-bold">Persona</label>
    <select class="form-select" id="person" name="person">
        <option value="" selected>Seleccione una opción</option>
        <option value="Física" {{ old('person', $person->person) === 'Física' ? 'selected' : '' }}>Física</option>
        <option value="Moral" {{ old('person', $person->person) === 'Moral' ? 'selected' : '' }}>Moral</option>
    </select>
</div>
<div class="mb-3 mt-3">
    <label for="rfc" class="form-label fw-bold">RFC</label>
    <input type="text" class="form-control" id="rfc" name="rfc" aria-describedby="rfc" value="{{ old('rfc',$person->rfc)}}">
</div>
<div class="mb-3 mt-3">
    <label for="home" class="form-label fw-bold">Domicilio</label>
    <input type="text" class="form-control" id="home" name="home" aria-describedby="home" value="{{ old('home',$person->home)}}">
</div>
<div class="mb-3 mt-3">
    <label for="email" class="form-label fw-bold">Email</label>
    <input type="text" class="form-control" id="email" name="email" aria-describedby="email" value="{{ old('email',$person->email)}}">
</div>
<div class="mb-3 mt-3">
    <label for="phone" class="form-label fw-bold">Teléfono</label>
    <input type="text" class="form-control" id="phone" name="phone" aria-describedby="phone" value="{{ old('phone',$person->phone)}}">
</div>

<button type="submit" class="btn btn-primary">Guardar</button>
<br><br><br>