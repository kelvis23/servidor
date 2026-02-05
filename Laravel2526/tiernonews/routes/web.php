<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\JournalistController;
use App\Models\Article;
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

Route::get("/journalist", [JournalistController::class,"index"])->name('journalist'); // 
Route::get("/name/{name}",[JournalistController::class,"sayName"]);

//esto es para devolber la vista con losfomularios  de creasion
//al darle un nombre a la ruta , luego utlizaR  para referencias  del resto   mi proyecto 

Route::get("/journalist/create",[JournalistController::class,"create"])->name('journalist.create');

//esto es para guardar el journalist con los datos rellenados del formulario de creasion  
Route::post("/journalist",[JournalistController::class,"store"])->name('journalist.store');

Route::get("/journalist/{id}",[JournalistController::class,"show"]);
Route::get("/journalist/{id}/edit",[JournalistController::class,"edit"])->name('journalist.edit');
Route::put("/journalist/{id}",[JournalistController::class,"update"])->name('journalist.update');
Route::delete("/journalist/{id}",[JournalistController::class,"destroy"])->name('journalist.destroy');


Route::resource("/article",ArticleController::class);