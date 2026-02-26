<?php

use App\Http\Controllers\EventsController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/",[UserController::class,"index"])->name('user');
Route::delete("/user/{id}",[UserController::class,"destroy"])->name('destroy');

Route::get("/event",[EventsController::class,"create"])->name('create');
Route::post("/event",[EventsController::class,"store"])->name('store');
