<?php

namespace App\Http\Controllers;

use App\Models\Marca;
use Illuminate\Http\Request;

class MarcaController extends Controller
{
    public function index()
    {
        $marca = new Marca();
        return $marca->all();
    }

    public function store(Request $request)
    {
        $marca = new Marca();
        $marca->descripcion = $request->descripcion;        
        $marca->save();
        return "Registro Guardado Correctamente";
    }

    public function show(string $id)
    {
        return Marca::where('id',$id)->get();
    }

    public function update(Request $request, string $id)
    {
        $marca = Marca::find($id);
        $marca->descripcion = $request->descripcion;      
        $marca->save();
        return "Registro Actualizado Correctamente";
    }

    public function destroy(string $id)
    {
        $marca = Marca::find($id);
        $marca->delete();
        return "Eliminado correctamente";
    }
}
