<?php

namespace App\Http\Controllers;

use App\Models\Jugador;
use Illuminate\Http\Request;

class JugadoresController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Jugador::all()->load("equipo")->makeHidden("equipo_id");
    }
    


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

public function store(Request $request)
{
    $jugador = new Jugador();
    $jugador->nombre = $request->input('nombre');
    $jugador->apellido = $request->input('apellido');
    $jugador->nickname = $request->input('nickname');
    $jugador->agente_1 = $request->input('agente_1');
    $jugador->agente_2 = $request->input('agente_2');
    $jugador->agente_3 = $request->input('agente_3');
    $jugador->equipo_id = $request->input('equipo_id');

    if ($jugador->save()) {
        return response()->json(['message' => 'Jugador agregado correctamente'], 201);
    } else {
        return response()->json(['error' => 'Error al agregar jugador'], 500);
    }
}


    /**
     * Display the specified resource.
     */
    public function show($id)
{

    $jugador = Jugador::find($id);

    if ($jugador) {
        return response()->json($jugador);
    } else {
        return response()->json(['error' => 'Jugador no encontrado'], 404);
    }
}



    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Jugador $jugador)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Jugador $jugador)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Jugador $jugador)
{
    try {
        $jugador->delete();
        return response()->json(['message' => 'Jugador eliminado correctamente'], 200);
    } catch (\Exception $e) {
        return response()->json(['message' => 'Error al eliminar el jugador: ' . $e->getMessage()], 500);
    }
}


}
