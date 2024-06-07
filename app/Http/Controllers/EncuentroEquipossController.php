<?php

namespace App\Http\Controllers;

use App\Models\EncuentroEquipo;
use Illuminate\Http\Request;

class EncuentroEquipossController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $encuentroEquipos = EncuentroEquipo::with('encuentro', 'equipoLocal', 'equipoVisitante')->get();

        return response()->json($encuentroEquipos);
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
    public function show(EncuentroEquipo $encuentroEquipo)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(EncuentroEquipo $encuentroEquipo)
    {
        //
    }
}
