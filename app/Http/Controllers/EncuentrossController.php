<?php

namespace App\Http\Controllers;

use App\Models\Encuentro;
use Illuminate\Http\Request;

class EncuentrossController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    $encuentros = Encuentro::all()->map(function ($encuentro) {
        $encuentro->fecha = date('d/m/Y', strtotime($encuentro->fecha));
        return $encuentro;
    });

    return $encuentros;
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
    public function show(Encuentro $encuentro)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Encuentro $encuentro)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Encuentro $encuentro)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Encuentro $encuentro)
    {
        //
    }
}
