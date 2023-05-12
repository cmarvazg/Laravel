@csrf
<div class="mb-3 mt-3">
    <label for="type_transaction_id" class="form-label fw-bold">Tipo</label>
    <select class="form-select" id="type_transaction_id" name="type_transaction_id">
        <option value="" selected>Seleccione una opción</option>
        <option value="1" {{ old('type_transaction_id', $transaction->type_transaction_id) === 1 ? 'selected' : '' }}>Anticipo</option>
        <option value="2" {{ old('type_transaction_id', $transaction->type_transaction_id) === 2 ? 'selected' : '' }}>Pago</option>
    </select>
</div>
<div class="mb-3 mt-3">
    <label for="person_id" class="form-label fw-bold">Persona</label>
    <select class="form-select" id="person_id" name="person_id" aria-describedby="person">
        @foreach(App\Models\Person::all() as $person)
            <option value="{{ $person->id }}" {{ old('person_id',$transaction->person_id) == $person->id ? 'selected' : '' }}>{{ $person->rfc }}</option>
        @endforeach
    </select>
</div>
<div class="mb-3 mt-3">
    <label for="amount" class="form-label fw-bold">Monto</label>
    <input type="text" class="form-control" id="amount" name="amount" aria-describedby="amount" value="{{ old('amount',$transaction->amount)}}">
</div>
<div class="mb-3 mt-3">
    <label for="date" class="form-label fw-bold">Fecha</label>
    <input type="date" class="form-control" id="date" name="date" aria-describedby="date" value="{{ old('date',$transaction->date)}}">
</div>
<div class="mb-3 mt-3">
    <label for="method" class="form-label fw-bold">Método</label>
    <select class="form-select" id="method" name="method">
        <option value="" selected>Seleccione una opción</option>
        <option value="Depósito" {{ old('method', $transaction->method) === 'Depósito' ? 'selected' : '' }}>Depósito</option>
        <option value="Transferencia" {{ old('method', $transaction->method) === 'Transferencia' ? 'selected' : '' }}>Transferencia</option>
    </select>
</div>
<div class="mb-3 mt-3">
    <label for="reference" class="form-label fw-bold">Referencia</label>
    <input type="text" class="form-control" id="reference" name="reference" aria-describedby="reference" value="{{ old('reference',$transaction->reference)}}">
</div>

<button type="submit" class="btn btn-primary">Guardar</button>
<a href="{{ route('transaction.index') }}" class="btn btn-danger">Cancelar</a>
<br><br><br>