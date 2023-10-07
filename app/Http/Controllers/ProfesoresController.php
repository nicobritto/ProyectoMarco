<?php

namespace App\Http\Controllers;

use App\Models\Profesores;
use Illuminate\Http\Request;

class ProfesoresController extends Controller
{

    public function index()
    {

        $datos = Profesores::all();
        return view('inicio',compact('datos'));

    }


    public function create()
    {
        return  view('agregarDocente'); // agregarDocente.blade.php solo se pone agregarDocente

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
