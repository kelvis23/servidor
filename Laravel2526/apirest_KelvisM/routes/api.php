<?php

use App\Http\Controllers\ApiController;
use App\Http\Controllers\FlightApiController;
use App\Http\Controllers\PassengerApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

//debuelbe todos los buelos de la base de datos  debuelbe mensage = ok o message no flights

Route::get('/flight',[FlightApiController::class,"info"]);
Route::get('/flight/{id}',[FlightApiController::class,"show"]);
Route::post('/flight',[FlightApiController::class,"store"]);

Route::delete('/passenger/{id}',[PassengerApiController::class,"delete"]);
Route::Put('/passenger/{id}',[PassengerApiController::class,"update"]);

Route::get('/search/flight/{code}',[FlightApiController::class,"showcode"]);
Route::get('/passenger',[PassengerApiController::class,"infoage"]);

Route::put('/flight/{idflight}//{idpassenger',[ApiController::class,"info"]);