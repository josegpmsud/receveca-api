<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function index()
    {
        $usuario = new Usuario();
        return $usuario->all();
    }

    public function store(Request $request)
    {
        $usuario = new Usuario();
        $usuario->nombre = $request->nombre;
        $usuario->apellido = $request->apellido;
        $usuario->usuario = $request->usuario;
        $usuario->contrasena = $request->contrasena;
        $usuario->id_rol = $request->id_rol;        
        $usuario->estado = $request->estado; 
        $usuario->save();
        return "Registro Guardado Correctamente";
    }

    public function show(string $id)
    {
        return usuario::where('id',$id)->get();
    }

    public function update(Request $request, string $id)
    {
        $usuario = Usuario::find($id);
        $usuario->nombre = $request->nombre;
        $usuario->apellido = $request->apellido;
        $usuario->usuario = $request->usuario;
        $usuario->contrasena = $request->contrasena;
        $usuario->id_rol = $request->id_rol;        
        $usuario->estado = $request->estado; 
        $usuario->save();
        return "Registro Actualizado Correctamente";
    }

    public function destroy(string $id)
    {
        $usuario = Usuario::find($id);
        $usuario->delete();
        return "Eliminado correctamente";
    }
}
