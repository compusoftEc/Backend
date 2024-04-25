<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\MetodoPagoController;
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\ProductoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::middleware('auth:sanctum')->group(function () {
    Route::get('/user', function (Request $request) {
        return $request->user();
    });
    Route::post('/logout', [AuthController::class, 'logout']);

    // // Almacenar ordenes
    Route::apiResource('/pedidos', PedidoController::class);

    Route::apiResource('/categorias', CategoriaController::class);
    Route::apiResource('/metodoPago', MetodoPagoController::class);
    Route::apiResource('/productos/{idCategoria}/', ProductoController::class);
    //Route::apiResource('/productos}', ProductoController::class);
    //Route::apiResource('/registro', [AuthController::class, 'register']);
    //Route::apiResource('/registro', [AuthController::class, 'register'])->middleware('api');
});

// Autenticacio
Route::post('/Sregistro', [AuthController::class, 'requestRegister'])->middleware('api');
Route::post('/login', [AuthController::class, 'login'])->middleware('api');
Route::post('/registro', [AuthController::class, 'register'])->middleware('api');
