<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [OrderController::class, 'index'])->name('index');


Route::get('/product/search', [ProductController::class, 'search'])->name('product.search');

//autentificasion  
// //rutas no protegidas :
Route::middleware(['guest'])->group(function () {
    // aqui las rutas para 
});



//rutas autenticas
Route::middleware(['auth'])->group(function () {
    Route::get('/client/create', [ClientController::class, 'create'])->name('client.create');
    Route::post('/client', [ClientController::class, 'store'])->name('client.store');
    Route::delete('/client/{id}', [ClientController::class, 'destroy'])->name('client.destroy');
    Route::get('/order/create', [OrderController::class, 'create'])->name('order.create');
    Route::post('/order', [OrderController::class, 'store'])->name('order.store');

Route::get('/dashboard',[UserController::class,'dashboard'])->name('dashboard');
Route::put('/dashboard/{id}',[UserController::class,'dashboard'])->name('dashboard');

    Route::get('/logout', function () {
        auth()->logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect('/')->with("success", "Secion cerrada corectamente");
    })->name('logout');
});