<?php

namespace App\Http\Controllers;

use App\Models\Profesores;
use Illuminate\Http\Request;

class ProfesoresController extends Controller
{

    public function index()
    {

        $datos = Profesores::orderBy('escalafon','desc')->paginate(3);
        return view('inicio',compact('datos'));

    }


    public function create()
    {
        return  view('agregarDocente'); // agregarDocente.blade.php solo se pone agregarDocente

    }


    public function store(Request $request)
    {
        $profesores= new Profesores();
        $profesores->nombre = $request->post('nombre');
        $profesores->contacto = $request->post('contacto');
        $profesores->escalafon = $request->post('escalafon');
        $profesores ->save();

        return redirect()->route('profesores.index')->with("mensaje","Agregado con Exito!");
    }


    public function show($id)
    {
        //eliminar
        $profesores = Profesores::find($id);

        return  view('eliminar',compact("profesores"));

    }


    public function edit($id)
    {
        $profesores = Profesores::find($id);


        return  view('actualizarDocente',compact("profesores"));
    }


    public function update(Request $request,$id)
    {
            $profesores=Profesores::find($id);
            $profesores->nombre = $request->post('nombre');
            $profesores->contacto = $request->post('contacto');
            $profesores->escalafon = $request->post('escalafon');
            $profesores ->save();

        return redirect()->route('profesores.index')->with("mensaje","Actualizado con Exito!");


    }


    public function destroy($id)
    {
        $profesor=Profesores::find($id);
        $profesor->delete();
        return redirect()->route('profesores.index')->with("mensaje","Eliminado con Exito!");

    }
}
