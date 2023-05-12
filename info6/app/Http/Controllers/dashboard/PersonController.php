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
        return back() -> with('status', 'Persona creada satisfactoriamente');
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
        return back()->with('status', 'Persona actualizada correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Person $person)
    {
        $person -> delete();
        return back()->with('status', 'Persona eliminada correctamente');
    }
}
