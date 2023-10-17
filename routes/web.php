<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', function() {
    return view('home');
})->name('home')->middleware('auth');

Route::middleware('auth')->group(function (){

    Route::get('/teachers', function (){
       //Obtener datos de la BS
        $teachers = \App\Models\Teacher::all();

        //Asignar la cabecera de la datatable
        $heads = [
            'ID',
            'Nombre y Apellido',
            'Especialidad',
            'Email',
            'Fecha de contratacion',
            'Escalafon'
        ];
        //Retornar la vista con los parametros
        return view('teachers', compact('teachers', 'heads'));
    });

    // Ruta para mostrar el formulario de creación de profesores
    Route::get('/teachers/create', function (){
        return view('teachers-create');
    });

    // Ruta para almacenar los datos de profesores
    Route::post('/teachers', 'TeacherController@store')->name('teachers.store');
});

