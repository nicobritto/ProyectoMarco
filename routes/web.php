<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\ProfesoresController;


Route::get('/',[ProfesoresController::class,'index'])->name('profesores.index');

Route::get('/create',[ProfesoresController::class,'create'])->name('profesores.create');

Route::get('/edit',[ProfesoresController::class,'edit'])->name('profesores.edit');



















