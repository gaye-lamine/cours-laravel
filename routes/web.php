<?php

use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('products/{id}/edit', [ProductController::class, 'edit'])->name('products.edit');
Route::put('products/{id}', [ProductController::class, 'update'])->name('products.update');
Route::get('products/create', [ProductController::class, 'create'])->name('products.create');
Route::get('etudiants/create', [EtudiantController::class, 'create'])->name('etudiants.create');
Route::post('products', [ProductController::class, 'store'])->name('products.store');
Route::post('etudiants', [EtudiantController::class, 'store'])->name('etudiants.store');
Route::get('products', [ProductController::class, 'index'])->name('products.index');
Route::get('etudiants',[EtudiantController::class, 'index'])->name('etudiants.index');
Route::delete('etudiants/{id}', [EtudiantController::class, 'destroy'])->name('etudiants.destroy');
Route::get('etudiants/{id}/edit',[EtudiantController::class, 'edit'])->name('etudiants.edit');
Route::put('etudiants/{id}',[EtudiantController::class, 'update'])->name('etudiants.update');