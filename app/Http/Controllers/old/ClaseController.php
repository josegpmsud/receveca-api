<?php

namespace App\Http\Controllers;

use App\Models\Clase;
use Illuminate\Http\Request;

class ClaseController extends Controller
{
    public function index()
    {
        $clase = new Clase();
        return $clase->all();
    }

    public function store(Request $request)
    {
        $clase = new Clase();
        $clase->descripcion = $request->descripcion;        
        $clase->save();
        return "Registro Guardado Correctamente";
    }

    public function show(string $id)
    {
        return Clase::where('id',$id)->get();
    }

    public function update(Request $request, string $id)
    {
        $clase = Clase::find($id);
        $clase->descripcion = $request->descripcion;      
        $clase->save();
        return "Registro Actualizado Correctamente";
    }

    public function destroy(string $id)
    {
        $clase = Clase::find($id);
        $clase->delete();
        return "Eliminado correctamente";
    }

}
