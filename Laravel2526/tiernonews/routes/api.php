<?php

use App\Http\Controllers\ArticleApiController;
use App\Http\Controllers\JournalistApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

//endpint para busquedas de prueba de journalists:
Route::get('/search',[JournalistApiController::class,'search']);

Route::get("/journalist/{id}",[JournalistApiController::class,"show"]);
Route::post("/journalist",[JournalistApiController::class,"store"]);
Route::put("/journalist/{id}",[JournalistApiController::class,"update"]);
Route::delete("/journalist/{id}",[JournalistApiController::class,"destroy"]);


// para elimiar quiero  hacer un http delete 
//  http://127.0.0.1:8000/api/delete?minReaders=5maxReraders=9
//o esto http://127.0.0.1:8000/api/delete?maxReraders=9 en este caso se elimina todoss los articulos de los readers indicados en miReaders  
Route::delete('/delete',[ArticleApiController::class,"deleteByReaders"]);


