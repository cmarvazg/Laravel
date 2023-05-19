@extends('layouts.master')

@section('title', 'Personas del Proyecto')

@section('content')
    <h1 class="text-center mt-3">Personas del Proyecto: {{ $proyect->name }}</h1>
    
    <table class="table table-dark table-striped mt-3">
        <thead>
            <tr>
                <th scope="col" class="text-center">Razón social</th>
                <th scope="col" class="text-center">Tipo de persona</th>
                <th scope="col" class="text-center">RFC</th>
                <th scope="col" class="text-center">Deuda</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($people as $person)
                <tr>
                    <td class="text-center">{{ $person->business_name }}</td>
                    <td class="text-center">{{ $person->person }}</td>
                    <td class="text-center">{{ $person->rfc }}</td>
                    <td class="text-center">
                    @if ($person->type_person_id == 1)
                        {{ $proyect->total - $person->transactions()->sum('amount') }}
                    @else
                        @if (isset($person->debt))
                            {{ $person->debt - $person->transactions()->sum('amount') }}
                        @else
                            <a href="{{ route('person.setDebt', ['person' => $person->id]) }}" class="btn btn-primary">Capturar deuda</a>
                        @endif
                    @endif

                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="text-center" >
        <a href="{{ route('proyect.index') }}" class="btn btn-primary">Aceptar</a>
        <br><br>
    </div>
@endsection
