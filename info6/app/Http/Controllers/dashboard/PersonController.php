<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\PersonRequest;
use Illuminate\Http\Request;
use App\Models\Person;

class PersonController extends Controller
{
    //Middleware
    public function __construct(){
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $person = Person::orderBy('created_at', 'desc')->paginate(5);
        return view('dashboard.person.index', ['people' => $person]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $person = new Person();
        return view('dashboard.person.create', ['person' => $person]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PersonRequest $request)
    {
        Person::create($request->validated());
        return redirect()->route('person.index')->with('success', 'Persona creada correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Person $person)
    {
        return view('dashboard.person.show', ['person' => $person]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Person $person)
    {
        return view('dashboard.person.edit', ['person' => $person]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PersonRequest $request, Person $person)
    {
        $person->update($request->validated());
        return redirect()->route('person.index')->with('success', 'Persona actualizada correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Person $person)
    {
        $person -> delete();
        return redirect()->route('person.index')->with('success', 'Persona eliminada correctamente');
    }

    public function setDebt($person)
    {
        $person = Person::findOrFail($person);
        return view('dashboard.proyect.debt', ['person' => $person]);   
    }

    public function storeDebt(Request $request, $person)
    {
        $person = Person::find($person);
        $person->debt = $request->debt;
        $person->save();

        return redirect()->route('proyect.index')->with('status', 'Deuda guardada correctamente');
    }

}
