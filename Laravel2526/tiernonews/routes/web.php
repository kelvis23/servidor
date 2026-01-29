<?php

use App\Http\Controllers\JournalistController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route ::get("/hola",function(){
    return "hola mundo ";
});


Route ::get("/hola/{name}",function($name){
    return "hola ,$name ";
});

Route::get("/journalist", [JournalistController::class,"index"]);
Route::get("/name/{name}",[JournalistController::class,"sayName"]);

//esto es para devolber la vista con losfomularios  de creasion
Route::get("/journalist/create",[JournalistController::class,"create"]);
//esto es para guardar el journalist con los datos rellenados del formulario de creasion  
Route::get("/journalist/create",[JournalistController::class,"store"]);