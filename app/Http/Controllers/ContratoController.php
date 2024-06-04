<?php

namespace App\Http\Controllers;

use App\Models\Contrato;
use Illuminate\Http\Request;

class ContratoController extends Controller
{
    public function index()
    {
        $contrato = new Contrato();
        return $contrato->all();
    }

    public function store(Request $request)
    {
        $contrato = new Contrato();
        $contrato->ter_muerte = $request->ter_muerte;
        $contrato->ter_invalidez = $request->ter_invalidez;
        $contrato->ter_medicos = $request->ter_medicos;
        $contrato->ocu_muerte = $request->ocu_muerte;
        $contrato->ocu_invalidez = $request->ocu_invalidez;
        $contrato->ocu_medicos = $request->ocu_medicos;
        $contrato->danos = $request->danos;
        $contrato->b_cedula = $request->b_cedula;
        $contrato->direccion = $request->direccion;
        $contrato->telefono = $request->telefono;
        $contrato->estado = $request->estado; 
        $contrato->save();
        return "Registro Guardado Correctamente";
    }

    public function show(string $id)
    {
        return Contrato::where('id',$id)->get();
    }

    public function update(Request $request, string $id)
    {
        $contrato = Contrato::find($id);
        $contrato->ter_muerte = $request->ter_muerte;
        $contrato->ter_invalidez = $request->ter_invalidez;
        $contrato->ter_medicos = $request->ter_medicos;
        $contrato->ocu_muerte = $request->ocu_muerte;
        $contrato->ocu_invalidez = $request->ocu_invalidez;
        $contrato->ocu_medicos = $request->ocu_medicos;
        $contrato->danos = $request->danos;
        $contrato->b_cedula = $request->b_cedula;
        $contrato->direccion = $request->direccion;
        $contrato->telefono = $request->telefono;
        $contrato->estado = $request->estado;        
        $contrato->save();
        return "Registro Actualizado Correctamente";
    }

    public function destroy(string $id)
    {
        $contrato = Contrato::find($id);
        $contrato->delete();
        return "Eliminado correctamente";
    }
}
