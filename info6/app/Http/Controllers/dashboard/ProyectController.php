<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProyectRequest;
use Illuminate\Http\Request;
use App\Models\Proyect;

class ProyectController extends Controller
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
        $proyect = Proyect::orderBy('created_at', 'desc')->paginate(5);
        return view('dashboard.proyect.index', ['proyects' => $proyect]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $proyect = new Proyect();
        return view('dashboard.proyect.create', ['proyect' => $proyect]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProyectRequest $request)
    {
        $subtotal = $request->subtotal;
        $iva = $subtotal * 0.16;
        $total = $subtotal + $iva;

        Proyect::create
        ([
            'name' => $request->name,
            'date' => $request->date,
            'subtotal' => $subtotal,
            'iva' => $iva,
            'total' => $total,
            'concept' => $request->concept,
            'comment' => $request->comment
        ]);

        return redirect()->route('proyect.index')->with('success', 'Proyecto creado correctamente');
    }


    /**
     * Display the specified resource.
     */
    public function show(Proyect $proyect)
    {
        return view('dashboard.proyect.show', ['proyect' => $proyect]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Proyect $proyect)
    {
        return view('dashboard.proyect.edit', ['proyect' => $proyect]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProyectRequest $request, Proyect $proyect)
    {
        $subtotal = $request->subtotal;
        $iva = $subtotal * 0.16;
        $total = $subtotal + $iva;
    
        $proyect->update([
            'name' => $request->name,
            'date' => $request->date,
            'subtotal' => $subtotal,
            'iva' => $iva,
            'total' => $total,
            'concept' => $request->concept,
            'comment' => $request->comment
        ]);
        
        return redirect()->route('proyect.index')->with('success', 'Proyecto actualizado correctamente');
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Proyect $proyect)
    {
        $proyect -> delete();
        return redirect()->route('proyect.index')->with('success', 'Proyecto eliminado correctamente');
    }

    public function showPeople($proyect)
    {
        $proyect = Proyect::findOrFail($proyect); // Obtener el proyecto correspondiente
        $people = $proyect->people; // Obtener las personas relacionadas al proyecto

        return view('dashboard.proyect.people', compact('proyect', 'people'));
    }
}
