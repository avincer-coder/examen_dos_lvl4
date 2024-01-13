<?php

use App\Http\Controllers\ArticuloController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\DetalleIngresoController;
use App\Http\Controllers\DetalleVentaController;
use App\Http\Controllers\TrabajadorController;
use App\Http\Controllers\VentaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('articulos', ArticuloController::class);
Route::apiResource('detalle-ingresos', DetalleIngresoController::class);
Route::apiResource('clientes', ClienteController::class);
Route::apiResource('trabajadores', TrabajadorController::class);
Route::apiResource('ventas', VentaController::class);
Route::apiResource('detalle-ventas', DetalleVentaController::class);