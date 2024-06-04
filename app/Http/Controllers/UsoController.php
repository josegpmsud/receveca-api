<?php

namespace App\Http\Controllers;

use App\Models\Uso;
use Illuminate\Http\Request;

class UsoController extends Controller
{
    public function index()
    {
        $uso = new uso();
        return $uso->all();
    }

    public function store(Request $request)
    {
        $uso = new Uso();
        $uso->descripcion = $request->descripcion;        
        $uso->save();
        return "Registro Guardado Correctamente";
    }

    public function show(string $id)
    {
        return Uso::where('id',$id)->get();
    }

    public function update(Request $request, string $id)
    {
        $uso = Uso::find($id);
        $uso->descripcion = $request->descripcion;      
        $uso->save();
        return "Registro Actualizado Correctamente";
    }

    public function destroy(string $id)
    {
        $uso = Uso::find($id);
        $uso->delete();
        return "Eliminado correctamente";
    }
}
