@extends('layout/plantilla')


@section('ProyectoMarcoSecretaria','Proyecto marco para Secretaria')

@section('contenido')
    <br><br>
    <div class="card">

        <h5 class="card-header">Crud Profesores</h5>
        <div class="card-body">
            <h5 class="card-title">Listado de Profesores</h5>
            <p>
                <a href="{{route("profesores.create")}}"  class="btn btn-primary">Abregar un Nuevo Docente</a>
            </p>
            <hr>

            <p class="card-text">
                <div class="table table-responsive">
                <table class="table table-sm table-bordered">
                    <thead>
                    <th>Nombre</th>
                    <th>Contacto</th>
                    <th>Escalafon</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                    <tbody>
                    @foreach($datos as $item)
                        <tr>
                            <td> {{$item->nombre}}</td>
                            <td>{{$item->contacto}} </td>
                            <td>{{$item->escalafon}} </td>
                            <td> </td>
                            <td> </td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>
                    </thead>
                </div>
            </p>

        </div>
    </div>


@endsection
