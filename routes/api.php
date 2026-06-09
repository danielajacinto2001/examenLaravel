<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::apiResource('productos', \App\Http\Controllers\Api\ProductoController::class);
Route::apiResource('categorias', \App\Http\Controllers\Api\CategoriaController::class);
