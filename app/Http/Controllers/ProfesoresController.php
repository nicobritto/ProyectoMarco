<?php

namespace App\Http\Controllers;

use App\Models\Profesores;
use Illuminate\Http\Request;

class ProfesoresController extends Controller
{

    public function index()
    {

        return view('welcome');
    }


    public function create()
    {
        return  "aqui puede agregar";
        // formulario
    }


    public function store(Request $request)
    {
        // guardar datos
    }


    public function show(Profesores $profesores)
    {
        // mostrar un solo registro
    }


    public function edit(Profesores $profesores)
    {
        return "aca se actualiza";
    }


    public function update(Request $request, Profesores $profesores)
    {
        //
    }


    public function destroy(Profesores $profesores)
    {
        //
    }
}
