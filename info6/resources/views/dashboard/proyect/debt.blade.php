@extends('layouts.master')

@section('title', 'Establecer deuda')
@section('content')
    @include('fragments.validation-errors')
    @include('fragments.session')
    <div class="alert alert-info" role="alert">
        Proporciona la cantidad a pagar al proveedor {{$person->rfc}}.
    </div>
    <form action="{{ route('person.storeDebt', $person->id) }}" method="POST">
        @method('PUT')
        @csrf
        <div class="mb-3">
            <label for="debt" class="form-label fw-bold">Deuda</label>
            <div class="input-group">
                <input type="debt" class="form-control" id="debt" name="debt" aria-describedby="debt">
            </div>
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-primary">Guardar</button>
            <a href="{{ route('proyect.index') }}" class="btn btn-danger">Cancelar</a>
        </div>
    </form>
@endsection
