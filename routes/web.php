<?php

use App\Http\Controllers\PetController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
});
Route::get('/pet', [PetController::class, 'index'])->name('pet.index');
Route::get('/pet/{id}', [PetController::class, 'show'])->name('pet.show');
