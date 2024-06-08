<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use Illuminate\Http\Request;

class PlanController extends Controller
{
    public function index()
    {
        $plan = new Plan();
        return $plan->all();
    }

    public function store(Request $request)
    {
        $plan = new Plan();
        $plan->ter_muerte = $request->ter_muerte;
        $plan->ter_invalidez = $request->ter_invalidez;
        $plan->ter_medicos = $request->ter_medicos;
        $plan->ocu_muerte = $request->ocu_muerte;
        $plan->ocu_invalidez = $request->ocu_invalidez;
        $plan->ocu_medicos = $request->ocu_medicos;
        $plan->danos = $request->danos;
        $plan->materiales = $request->materiales;
        $plan->legal = $request->legal;
        $plan->limites = $request->limites;
        $plan->funerarios = $request->funerarios;
        $plan->grua = $request->grua;
        $plan->indem = $request->indem;
        $plan->extra = $request->extra;
        $plan->valor = $request->valor;
        $plan->descripcion = $request->descripcion;
        $plan->estado = $request->estado;
        $plan->save();
        return "Registro Guardado Correctamente";
    }

    public function show(string $id)
    {
        return Plan::where('id',$id)->get();
    }

    public function update(Request $request, string $id)
    {
        $plan = Plan::find($id);
        $plan->ter_muerte = $request->ter_muerte;
        $plan->ter_invalidez = $request->ter_invalidez;
        $plan->ter_medicos = $request->ter_medicos;
        $plan->ocu_muerte = $request->ocu_muerte;
        $plan->ocu_invalidez = $request->ocu_invalidez;
        $plan->ocu_medicos = $request->ocu_medicos;
        $plan->danos = $request->danos;
        $plan->materiales = $request->materiales;
        $plan->legal = $request->legal;
        $plan->limites = $request->limites;
        $plan->funerarios = $request->funerarios;
        $plan->grua = $request->grua;
        $plan->indem = $request->indem;
        $plan->extra = $request->extra;
        $plan->valor = $request->valor;
        $plan->descripcion = $request->descripcion;
        $plan->estado = $request->estado;
        $plan->save();
        return "Registro Actualizado Correctamente";
    }

    public function destroy(string $id)
    {
        $plan = Plan::find($id);
        $plan->delete();
        return "Eliminado correctamente";
    }

}
