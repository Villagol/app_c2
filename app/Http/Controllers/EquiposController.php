<?php

namespace App\Http\Controllers;

use App\Models\Equipo;
use Illuminate\Http\Request;

class EquiposController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $equipos = Equipo::orderBy('nombre')->get();
        return $equipos;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $request->validate([
        'nombre' => 'required|string',
        'entrenador' => 'required|string',
        'region_id' => 'required|integer',
    ]);

    $equipo = new Equipo();
    $equipo->nombre = $request->nombre;
    $equipo->entrenador = $request->entrenador;
    $equipo->region_id = $request->region_id;
    $equipo->save();

    return response()->json(['message' => 'Equipo creado correctamente'], 201);
}


    /**
     * Display the specified resource.
     */
    public function show(Equipo $equipo)
    {
        return $equipo;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Equipo $equipo)
{
    return $equipo;
}

    /**
     * Update the specified resource in storage.
     */
    /**
 * Update the specified resource in storage.
 */
public function update(Request $request, Equipo $equipo)
{
    try {
        $request->validate([
            'nombre' => 'required|string',
            'entrenador' => 'required|string',
            'region_id' => 'required|integer',
        ]);

        $equipo->update([
            'nombre' => $request->nombre,
            'entrenador' => $request->entrenador,
            'region_id' => $request->region_id,
        ]);

        return response()->json(['message' => 'Equipo actualizado correctamente'], 200);
    } catch (\Exception $e) {
        return response()->json(['message' => 'Error al actualizar el equipo: ' . $e->getMessage()], 500);
    }
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Equipo $equipo)
{
    try {
        $equipo->delete();
        return response()->json(['message' => 'Equipo eliminado correctamente'], 200);
    } catch (\Exception $e) {
        return response()->json(['message' => 'Error al eliminar el equipo: ' . $e->getMessage()], 500);
    }
}
}
