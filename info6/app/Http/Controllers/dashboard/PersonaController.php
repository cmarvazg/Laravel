<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\PersonaRequest;
use Illuminate\Http\Request;
use App\Models\Persona;

class PersonaController extends Controller
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
        $persona = Persona::orderBy('created_at', 'desc')->paginate(5);
        return view('dashboard.persona.index', ['personas' => $persona]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $persona = new Persona();
        return view('dashboard.persona.create', ['persona' => $persona]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PersonaRequest $request)
    {
        Persona::create([
            'tipo_persona_id' => $request->input('tipo_persona_id'),
            'razon_social' => $request->input('razon_social'),
            'persona' => $request->input('persona'),
            'rfc' => $request->input('rfc'),
            'domicilio' => $request->input('domicilio'),
            'email' => $request->input('email'),
            'telefono' => $request->input('telefono')
        ]);
        return back() -> with('status', 'Persona creada satisfactoriamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Persona $persona)
    {
        return view('dashboard.persona.show', ['persona' => $persona]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Persona $persona)
    {
        return view('dashboard.persona.edit', ['persona' => $persona]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PersonaRequest $request, Persona $persona)
    {
        $persona->update($request->validated());
        return back()->with('status', 'Persona actualizada correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Persona $persona)
    {
        $persona -> delete();
        return back()->with('status', 'Persona eliminada correctamente');
    }
}
