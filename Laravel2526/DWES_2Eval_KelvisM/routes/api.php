<?php

use App\Http\Controllers\AuthorApiController;
use App\Http\Controllers\AutorApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


// Listar todos los authors
Route::get('/authors', [AuthorApiController::class, 'index']);

// Mostrar un author por id
Route::get('/author/{id}', [AuthorApiController::class, 'show']);

// Crear un nuevo author
Route::post('/author', [AuthorApiController::class, 'store']);

// Actualizar un author existente
Route::put('/author/{id}', [AuthorApiController::class, 'update']);

// Eliminar un author
Route::delete('/author/{id}', [AuthorApiController::class, 'destroy']);

// Incrementar la edad de todos los authors
Route::put('/author/increment-age/{years}', [AuthorApiController::class, 'incrementAge']);