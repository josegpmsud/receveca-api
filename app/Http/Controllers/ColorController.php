<?php

namespace App\Http\Controllers;

use App\Models\Color;
use Illuminate\Http\Request;

class ColorController extends Controller
{
    public function index()
    {
        $color = new Color();
        return $color->all();
    }

    public function store(Request $request)
    {
        $color = new Color();
        $color->descripcion = $request->descripcion;        
        $color->save();
        return "Registro Guardado Correctamente";
    }

    public function show(string $id)
    {
        return Color::where('id',$id)->get();
    }

    public function update(Request $request, string $id)
    {
        $color = Color::find($id);
        $color->descripcion = $request->descripcion;      
        $color->save();
        return "Registro Actualizado Correctamente";
    }

    public function destroy(string $id)
    {
        $color = Color::find($id);
        $color->delete();
        return "Eliminado correctamente";
    }

}
