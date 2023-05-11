<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Requests\TransaccionRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Transaccion;

class TransaccionController extends Controller
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
        $transaccion = Transaccion::orderBy('created_at', 'desc')->paginate(5);
        return view('dashboard.transaccion.index', ['transacciones' => $transaccion]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $transaccion = new Transaccion();
        return view('dashboard.transaccion.create', ['transaccion' => $transaccion]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TransaccionRequest $request)
    {
        Transaccion::create([
            'tipo_transaccion_id' => $request->input('tipo_transaccion_id'),
            'persona_id' => $request->input('persona_id'),
            'monto' => $request->input('monto'),
            'fecha' => $request->input('fecha'),
            'metodo' => $request->input('metodo'),
            'referencia' => $request->input('referencia')
        ]);
        return back() -> with('status', 'Transacción creada satisfactoriamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Transaccion $transaccion)
    {
        return view('dashboard.transaccion.show', ['transaccion' => $transaccion]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Transaccion $transaccion)
    {
        return view('dashboard.transaccion.edit', ['transaccion' => $transaccion]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TransaccionRequest $request, Transaccion $transaccion)
    {
        $transaccion->update($request->validated());
        return back()->with('status', 'Transacción actualizada correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Transaccion $transaccion)
    {
        $transaccion -> delete();
        return back()->with('status', 'Transacción eliminada correctamente');
    }
}
