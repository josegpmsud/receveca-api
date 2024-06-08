<?php

namespace App\Http\Controllers;

use App\Models\Vehiculo;
use Illuminate\Http\Request;

class VehiculoController extends Controller
{
    public function index()
    {
        $vehiculo = new vehiculo();
        return $vehiculo->all();
    }

    public function store(Request $request)
    {
        $vehiculo = new vehiculo();
        $vehiculo->id_cliente = $request->id_cliente;
        $vehiculo->id_marca = $request->id_marca;
        $vehiculo->id_clase = $request->id_clase;
        $vehiculo->id_color = $request->id_color;
        $vehiculo->id_tipo = $request->id_tipo;        
        $vehiculo->id_uso = $request->id_uso;
        $vehiculo->placa = $request->placa;
        $vehiculo->ano = $request->ano;
        $vehiculo->peso = $request->peso;
        $vehiculo->serial_motor = $request->serial_motor;
        $vehiculo->puestos = $request->puestos;
        $vehiculo->serial_niv = $request->serial_niv;        
       
        $vehiculo->save();
        return "Registro Guardado Correctamente";
    }

    public function show(string $id)
    {
        return Vehiculo::where('id',$id)->get();
    }

    public function update(Request $request, string $id)
    {
        $vehiculo = Vehiculo::find($id);
        $vehiculo->id_cliente = $request->id_cliente;
        $vehiculo->id_marca = $request->id_marca;
        $vehiculo->id_clase = $request->id_clase;
        $vehiculo->id_color = $request->id_color;
        $vehiculo->id_tipo = $request->id_tipo;        
        $vehiculo->id_uso = $request->id_uso;
        $vehiculo->placa = $request->placa;
        $vehiculo->ano = $request->ano;
        $vehiculo->peso = $request->peso;
        $vehiculo->serial_motor = $request->serial_motor;
        $vehiculo->puestos = $request->puestos;
        $vehiculo->serial_niv = $request->serial_niv;      
        $vehiculo->save();
        return "Registro Actualizado Correctamente";
    }

    public function destroy(string $id)
    {
        $vehiculo = Vehiculo::find($id);
        $vehiculo->delete();
        return "Eliminado correctamente";
    }
}
