@extends('layout/plantilla')


@section('ProyectoMarcoSecretaria','Proyecto marco para Secretaria')

@section('contenido')

    <div class="card">

        <h5 class="card-header">Crud Profesores</h5>
        <div class="card-body">
            <h5 class="card-title text-center">Listado de Profesores</h5>
            <p>
                <a href="{{route("profesores.create")}}"  class="btn btn-primary">
                    <span class="fas fa-user-plus"></span> Abregar un Nuevo Docente
                </a>
            </p>
            <div class="col-sm-12">
                @if($mensaje=Session::get('mensaje'))
                    <div class="alert alert-success" role="alert">
                        {{$mensaje}}
                    </div>
                @endif

            </div>
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
                            <td>
                                <form action="{{route('profesores.edit',$item->id)}}" method="get">
                                    <button class="btn btn-warning btn-sm">
                                        <span class="fas fa-user-edit"></span>
                                    </button>
                                </form>
                            </td>

                            <td>
                                <form action="{{route('profesores.show',$item->id)}}" method="get" >
                                    <button class="btn btn-danger btn-sm">
                                        <span class="fas fa-user-times"></span>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>
                <hr>
                <div class="row">
                    <div class="col-sm-12">
                        {{$datos->links()}}
                    </div>
                </div>
                    </thead>
                </div>
            </p>

        </div>
    </div>




















@endsection
