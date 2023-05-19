<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Requests\TransactionRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Transaction;

class TransactionController extends Controller
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
        $transaction = Transaction::orderBy('created_at', 'desc')->paginate(5);
        return view('dashboard.transaction.index', ['transactions' => $transaction]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Transaction $transaction)
    {
        $transaction = new Transaction();
        return view('dashboard.transaction.create', ['transaction' => $transaction]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TransactionRequest $request)
    {
        Transaction::create($request->validated());
        return redirect()->route('transaction.index')->with('success', 'Transacción creada correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Transaction $transaction)
    {
        return view('dashboard.transaction.show', ['transaction' => $transaction]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Transaction $transaction)
    {
        return view('dashboard.transaction.edit', ['transaction' => $transaction]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TransactionRequest $request, Transaction $transaction)
    {
        $transaction->update($request->validated());
        return redirect()->route('transaction.index')->with('success', 'Transacción actualizada correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Transaction $transaction)
    {
        $transaction -> delete();
        return redirect()->route('transaction.index')->with('success', 'Transacción eliminada correctamente');
    }
}
