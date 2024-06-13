<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EquiposController;
use App\Http\Controllers\JugadoresController;
use App\Http\Controllers\EncuentrossController;
use App\Http\Controllers\EncuentroEquipossController;
use App\Http\Controllers\MapassController;
use App\Http\Controllers\RegionessController;



Route::get('/user', function (Request $request){
    return $request->user();
})->middleware('auth:sanctum');


Route::apiResource('/equipos', EquiposController::class);
Route::apiResource('/jugadores', JugadoresController::class);
Route::apiResource('/encuentros', EncuentrossController::class);
Route::apiResource('/encuentro_equipos', EncuentroEquipossController::class);
Route::apiResource('/mapas', MapassController::class);
Route::apiResource('/regiones', RegionessController::class);
Route::put('/equipos/{equipo}', [EquiposController::class, 'update']);
Route::delete('/jugadores/{jugador}', [JugadoresController::class, 'destroy']);
Route::put('/encuentro_equipos/{encuentro_equipo}', [EncuentroEquipossController::class, 'update']);
Route::put('/jugadores/{jugador}', [JugadoresController::class, 'update']);
Route::patch('/encuentro_equipos/{encuentro_equipo}', [EncuentroEquipossController::class, 'update']);
Route::delete('/jugadores',[JugadoresController::class,'destroy']);
Route::put('/encuentro_equipos/{encuentro_equipo}/resultado', [EncuentroEquipossController::class, 'updateResultado']);
