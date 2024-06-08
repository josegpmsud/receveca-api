<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index()
    {
        $cliente = new Cliente();
        return $cliente->all();
    }

    public function store(Request $request)
    {
        $cliente = new Cliente();
        $cliente->nac = $request->nac;
        $cliente->nombre = $request->nombre;
        $cliente->apellido = $request->apellido;
        $cliente->cedula_rif = $request->cedula_rif;
        $cliente->b_nac = $request->b_nac;
        $cliente->b_nombre = $request->b_nombre;
        $cliente->b_apellido = $request->b_apellido;
        $cliente->b_cedula = $request->b_cedula;
        $cliente->direccion = $request->direccion;
        $cliente->telefono = $request->telefono;
        $cliente->estado = $request->estado; 
        $cliente->save();
        return "Registro Guardado Correctamente";
    }

    public function show(string $id)
    {
        return Cliente::where('id',$id)->get();
    }

    public function update(Request $request, string $id)
    {
        $cliente = Cliente::find($id);
        $cliente->nac = $request->nac;
        $cliente->nombre = $request->nombre;
        $cliente->apellido = $request->apellido;
        $cliente->cedula_rif = $request->cedula_rif;
        $cliente->b_nac = $request->b_nac;
        $cliente->b_nombre = $request->b_nombre;
        $cliente->b_apellido = $request->b_apellido;
        $cliente->b_cedula = $request->b_cedula;
        $cliente->direccion = $request->direccion;
        $cliente->telefono = $request->telefono;
        $cliente->estado = $request->estado;  
        $cliente->save();
        return "Registro Actualizado Correctamente";
    }

    public function destroy(string $id)
    {
        $cliente = Cliente::find($id);
        $cliente->delete();
        return "Eliminado correctamente";
    }
}
