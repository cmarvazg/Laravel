<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use Illuminate\Http\Request;
use App\Models\User;

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
        $users = User::orderBy('created_at', 'desc')->paginate(5);
        return view('dashboard.user.index', ['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = new User();
        return view('dashboard.user.create', ['user' => $user]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UserRequest $request)
    {
        User::create([
            'role_id' => $request->input('role_id'),
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
        ]);
        return back() -> with('status', 'El usuario fue creado satisfactoriamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        return view('dashboard.user.show', ['user' => $user]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return view('dashboard.user.edit', ['user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user->update($request->validated());
        return back()->with('status', 'Usuario actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user -> delete();
        return back()->with('status', 'usuario eliminado correctamente');
    }
}
