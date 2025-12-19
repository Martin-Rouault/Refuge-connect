<?php

use App\Http\Controllers\AnimalController;
use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;

Route::get('/', [IndexController::class, 'index'])->name('home');
Route::get('/animal/{id}', [AnimalController::class, 'show'])->name('animal.details');
Route::prefix('/animals')->group(function () {
    Route::get('/creer', [AnimalController::class, 'create'])->name('animals.create');
    Route::get('/modifier/{id}', [AnimalController::class, 'update'])->name('animals.update');
    Route::get('/supprimer/{id}', [AnimalController::class, 'delete'])->name('animals.delete');
});
Route::fallback(function () {
    return view('errors.not-found');
});
