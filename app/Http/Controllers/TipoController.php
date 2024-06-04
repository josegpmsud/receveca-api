<?php

namespace App\Http\Controllers;

use App\Models\Tipo;
use Illuminate\Http\Request;

class TipoController extends Controller
{
    public function index()
    {
        $tipo = new Tipo();
        return $tipo->all();
    }

    public function store(Request $request)
    {
        $tipo = new Tipo();
        $tipo->descripcion = $request->descripcion;        
        $tipo->save();
        return "Registro Guardado Correctamente";
    }

    public function show(string $id)
    {
        return Tipo::where('id',$id)->get();
    }

    public function update(Request $request, string $id)
    {
        $tipo = Tipo::find($id);
        $tipo->descripcion = $request->descripcion;      
        $tipo->save();
        return "Registro Actualizado Correctamente";
    }

    public function destroy(string $id)
    {
        $tipo = Tipo::find($id);
        $tipo->delete();
        return "Eliminado correctamente";
    }
}
