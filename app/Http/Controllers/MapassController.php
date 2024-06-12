<?php

namespace App\Http\Controllers;

use App\Models\Mapa;
use Illuminate\Http\Request;

class MapassController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mapas = Mapa::all()->pluck('nombre');
    
        return response()->json($mapas);
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
{
    $mapa = Mapa::find($id);

    if ($mapa) {
        return response()->json($mapa);
    } else {
        return response()->json(['error' => 'Mapa no encontrado'], 404);
    }
}


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mapa $mapa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Mapa $mapa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mapa $mapa)
    {
        //
    }
}
