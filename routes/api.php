<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EquiposController;
use App\Http\Controllers\JugadoresController;
use App\Http\Controllers\EncuentrosController;
use App\Http\Controllers\EncuentroEquiposController;
use App\Http\Controllers\MapasController;
use App\Http\Controllers\RegionesController;

Route::resource('/equipos', EquiposController::class);
Route::resource('/jugadores', JugadoresController::class);
Route::resource('/encuentros', EncuentrosController::class);
Route::resource('/encuentro_equipos', EncuentroEquiposController::class);
Route::resource('/mapas', MapasController::class);
Route::resource('/regiones', RegionesController::class);
