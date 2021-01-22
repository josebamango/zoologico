<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnimalController;
use App\Http\Controllers\InicioController;

Route::get('/', [InicioController::class, "home"])->name("animales.home");

Route::get('animales', [AnimalController::class, "index"])->name("animales.index");

Route::get('animales/crear', [AnimalController::class, "create"])->name("animales.create");

Route::get('animales/{animal}', [AnimalController::class,"show"])->name("animales.show");

Route::get('animales/{animal}/editar',[AnimalController::class, "edit"])->name("animales.edit");
