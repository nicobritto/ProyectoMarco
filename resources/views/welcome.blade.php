@extends('layout/plantilla')


@section('ProyectoMarcoSecretaria','Proyecto marco para Secretaria')

@section('contenido')
     <div class="row">
         <h1> Arancando con secretaria que saldra nadie lo sabe </h1>
         <i class="fa fa-wheelchair-alt" aria-hidden="true"></i>
         <a href="{{route('profesores.create')}}">Agregar Profe</a>


     </div>
@endsection
