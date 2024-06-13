<?php

namespace App\Http\Controllers;

use App\Models\EncuentroEquipo;
use Illuminate\Http\Request;
use App\Models\Encuentro;
class EncuentroEquipossController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    $encuentroEquipos = EncuentroEquipo::with('encuentro.mapa', 'equipoLocal', 'equipoVisitante')->get();

    $formattedEncuentros = $encuentroEquipos->map(function ($encuentro) {
        return [
            'id' => $encuentro->id,
            'nombre_equipo_local' => $encuentro->equipoLocal->nombre,
            'nombre_equipo_visitante' => $encuentro->equipoVisitante->nombre,
            'resultado' => $encuentro->resultado,
            'mapa' => $encuentro->encuentro->mapa->nombre,
            'hora' => date('H:i', strtotime($encuentro->encuentro->hora)),
            'fecha' => date('d/m/Y', strtotime($encuentro->encuentro->fecha)),
        ];
    });

    return response()->json($formattedEncuentros);
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
        'equipo_local_id' => 'required|exists:equipos,id',
        'equipo_visitante_id' => 'required|exists:equipos,id',
        'resultado' => 'nullable|string',
        'mapa_id' => 'required|exists:mapas,id',
        'fecha' => 'required|date_format:d/m/Y',
    ]);

    try {
        $fecha = \DateTime::createFromFormat('d/m/Y', $request->fecha);

        $encuentro = new Encuentro();
        $encuentro->fecha = $fecha;
        $encuentro->mapa_id = $request->mapa_id;
        $encuentro->save();

        $encuentroEquipo = new EncuentroEquipo();
        $encuentroEquipo->encuentro_id = $encuentro->id;
        $encuentroEquipo->equipo_local_id = $request->equipo_local_id;
        $encuentroEquipo->equipo_visitante_id = $request->equipo_visitante_id;
        $encuentroEquipo->resultado = $request->resultado;
        $encuentroEquipo->save();

        return response()->json(['message' => 'Encuentro creado correctamente'], 201);
    } catch (\Exception $e) {
        return response()->json(['message' => 'Error al crear el encuentro: ' . $e->getMessage()], 500);
    }
}


    /**
     * Display the specified resource.
     */
    public function show($id)
{
    try {
        $encuentro = EncuentroEquipo::with('encuentro', 'equipoLocal', 'equipoVisitante')->findOrFail($id);

        $formattedEncuentro = [
            'id' => $encuentro->id,
            'nombre_equipo_local' => $encuentro->equipoLocal->nombre,
            'nombre_equipo_visitante' => $encuentro->equipoVisitante->nombre,
            'resultado' => $encuentro->resultado,
            'mapa' => $encuentro->encuentro->mapa->nombre,
            'hora' => date('H:i', strtotime($encuentro->encuentro->hora)),
            'fecha' => date('d/m/Y', strtotime($encuentro->encuentro->fecha)),
        ];

        return response()->json($formattedEncuentro);
    } catch (\Exception $e) {
        return response()->json(['error' => 'Encuentro no encontrado'], 404);
    }
}


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(EncuentroEquipo $encuentroEquipo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, EncuentroEquipo $encuentroEquipo)
    {
        try {
            $request->validate([
                'hora' => 'required|date_format:H:i',
                'fecha' => 'required|date_format:d/m/Y',
            ]);

            // Obtener el encuentro relacionado para actualizar la fecha y hora
            $encuentro = $encuentroEquipo->encuentro;
            if ($encuentro) {
                $encuentro->update([
                    'hora' => \DateTime::createFromFormat('H:i', $request->hora)->format('H:i:s'),
                    'fecha' => \DateTime::createFromFormat('d/m/Y', $request->fecha)->format('Y-m-d'),
                ]);
            } else {
                throw new \Exception('No se encontró el encuentro relacionado.');
            }

            return response()->json(['message' => 'Fecha y hora del encuentro actualizados correctamente'], 200);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Error al actualizar la fecha y hora del encuentro: ' . $e->getMessage()], 500);
        }
    }

    


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
{
    try {
        $encuentro = EncuentroEquipo::findOrFail($id);
        $encuentro->delete();

        return response()->json([
            'message' => 'Encuentro eliminado correctamente',
        ], 200);
    } catch (\Exception $e) {
        return response()->json([
            'message' => 'Error al eliminar el encuentro',
            'error' => $e->getMessage(),
        ], 500);
    }
}
public function updateResultado(Request $request, EncuentroEquipo $encuentroEquipo)
{
    try {
        $request->validate([
            'resultado' => 'required|string',
        ]);

        $encuentroEquipo->update([
            'resultado' => $request->resultado,
        ]);

        return response()->json(['message' => 'Resultado del encuentro actualizado correctamente'], 200);
    } catch (\Exception $e) {
        return response()->json(['error' => 'Error al actualizar el resultado del encuentro: ' . $e->getMessage()], 500);
    }
}

}
