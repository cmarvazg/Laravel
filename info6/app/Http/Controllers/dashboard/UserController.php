<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserEditRequest;
use App\Http\Requests\PasswordRequest;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\UserRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\User;
use App\Http\Requests\AddProyectRequest;

class UserController extends Controller
{
    //Middleware
    public function __construct(){
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::orderBy('created_at', 'desc')->paginate(5);
        return view('dashboard.user.index', ['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = new User();
        return view('dashboard.user.create', ['user' => $user]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
        User::create($request->validated());
        return redirect()->route('user.index')->with('success', 'Usuario creado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('dashboard.user.show', ['user' => $user]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {        
        return view('dashboard.user.edit', ['user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserEditRequest $request, User $user)
    {
        $user->update($request->validated());
        return redirect()->route('user.index')->with('success', 'Usuario actualizado correctamente');
    }

    public function setTempPassword(User $user)
    {
        $tempPassword = Str::random(10); // generar una contraseña temporal aleatoria de 10 caracteres
        $user->temp_password = Hash::make($tempPassword); // establecer la contraseña temporal
        $user->password = Hash::make($tempPassword);
        $user->save(); // guardar el usuario con la nueva contraseña temporal

        return redirect()->route('user.show', $user->id)->with('tempPassword', $tempPassword); // redirigir al usuario a la vista "show" y pasar la contraseña temporal como variable de sesión
    }

    public function setNewPassword(PasswordRequest $request, User $user)
    {
        $user = auth()->user();
        
        $user->password = bcrypt($request->password);
        $user->temp_password = null;
        $user->save();
        
        return redirect()->route('user.index')->with('status', 'Contraseña actualizada correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('user.index')->with('success', 'Usuario eliminado correctamente');
    }
}
