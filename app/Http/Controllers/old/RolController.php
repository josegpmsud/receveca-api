<?php

namespace App\Http\Controllers;

use App\Models\Rol;
use Illuminate\Http\Request;

class RolController extends Controller
{
    public function index()
    {
        $rol = new Rol();
        return $rol->all();
    }

    public function store(Request $request)
    {
        $rol = new Rol();
        $rol->descripcion = $request->descripcion;        
        $rol->save();
        return "Registro Guardado Correctamente";
    }

    public function show(string $id)
    {
        return Rol::where('id',$id)->get();
    }

    public function update(Request $request, string $id)
    {
        $rol = Rol::find($id);
        $rol->descripcion = $request->descripcion;      
        $rol->save();
        return "Registro Actualizado Correctamente";
    }

    public function destroy(string $id)
    {
        $rol = Rol::find($id);
        $rol->delete();
        return "Eliminado correctamente";
    }
}
