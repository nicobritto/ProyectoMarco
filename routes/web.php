<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\ProfesoresController;

//primera parte a que parte del controlador va ir
//Route::get('/create' <----   segunda parte lo q usamos nosots 'profesores.index' en la pagina http:// etc
Route::get('/',[ProfesoresController::class,'index'])->name('profesores.index');

Route::get('/create',[ProfesoresController::class,'create'])->name('profesores.create');

Route::post('/store',[ProfesoresController::class,'store'])->name('profesores.store');

Route::get('/edit/{id}',[ProfesoresController::class,'edit'])->name('profesores.edit');

Route::put('/update/{id}',[ProfesoresController::class,'update'])->name('profesores.update');

Route::get('/show',[ProfesoresController::class,'show'])->name('profesores.show');



















