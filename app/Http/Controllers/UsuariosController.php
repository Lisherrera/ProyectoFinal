<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use App\Models\Perfil;
use Illuminate\Http\Request;
use App\Http\Requests\UsuarioRequest;
use Illuminate\Support\Facades\Auth;
use Gate;

class UsuariosController extends Controller
{
    public function index()
    {   
    
    if(Gate::denies('usuarios-gestion'))
        {
            return redirect()->route('home.index');
        }

        $usuarios = Usuario::orderBy('perfil_id')->orderBy('email')->get();
        return view('usuarios.index',compact('usuarios'));
    }
    
    public function create()
    {
        $perfiles= Perfil::all();
        return view('usuarios.create', compact('perfiles'));
    }

    public function store(UsuarioRequest $request)
    {
        $usuario = new Usuario();
        $usuario->nombre = $request->nombre;
        $usuario->email = $request->email;
        $usuario->password = bcrypt($request->password);
        $usuario->activo = $request->has('activo') ? 1 : 0;
        $usuario->perfil_id = $request->perfil;

        $usuario->save();
        return redirect()->route('usuarios.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Usuario $usuario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Usuario $usuario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Usuario $usuario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Usuario $usuario)
    {
        if (Gate::denies('usuarios-gestion')) {
            return redirect()->route('home.index')->withErrors('No tienes permisos para eliminar usuarios.');
        }
    
        // Eliminar el usuario
        $usuario->delete();
    
        return redirect()->route('usuarios.index');
    }

    public function login(){
        return view('usuarios.login');
    }

    public function autenticar(Request $request){
        $credenciales = ['email' => $request->email,'password' => $request->password];
        if (Auth::attempt($credenciales)) {
            // Credenciales correctas
            $request->session()->regenerate();
            return redirect()->route('home.index');
        }
    
        return back()->withErrors('Credenciales incorrectas')->onlyInput('email');
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('usuarios.login');
    }

    public function contrasena(){
        return view('usuarios.contrasena');
    }

}
