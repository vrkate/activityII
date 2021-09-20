<?php

use App\Http\Controllers\ProductsController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::view('/', 'index')->name('root');

Route::group(['prefix' => 'products', 'as' => 'products.'], function(){

    Route::get('/', [ProductsController::class, 'index'])->name('index');
    Route::get('/create', [ProductsController::class, 'create'])->name('create');
    Route::post('/create', [ProductsController::class, 'store'])->name('store');
    Route::get('/{id}/edit', [ProductsController::class, 'edit'])->name('edit');
    Route::put('/{id}/edit', [ProductsController::class, 'update'])->name('update');
    Route::delete('/{id}/delete', [ProductsController::class, 'delete'])->name('delete');
});

Route::resource('users', UserController::class);



