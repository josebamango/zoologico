<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnimalController;
use App\Http\Controllers\InicioController;

Route::get('/', [InicioController::class, "home"])->name("animales.home");

Route::get('animales', [AnimalController::class, "index"])->name("animales.index");

Route::get('animales/crear', [AnimalController::class, "create"])->name("animales.create");

Route::get('animales/{animal}', [AnimalController::class,"show"])->name("animales.show");

Route::post('animales/store', [AnimalController::class, "store"])->name("animales.store");

Route::get('animales/{animal}/editar',[AnimalController::class, "edit"])->name("animales.edit");

Route::put('animales/{animal}', [AnimalController::class, 'update'])->name("animales.update");

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
