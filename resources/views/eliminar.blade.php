@extends('layout.plantilla')

@section("tituloPagina","Crear un nuevo registro")

@section('contenido')

    <div class="card">
        <h5 class="card-header">Eliminar   Docente</h5>
        <div class="card-body">

            <p class="card-text">

                <div class="alert alert-danger " role="alert">
                    Estas seguro de eliminar este registro

                <table class="table table-sm table-hover table-bordered" >
                    <thead>
                    <th>Nombre</th>
                    <th>Contacto</th>
                    <th>Escalafon</th>
                    </thead>

                    <tbody>
                    <tr>
                        <td> {{$profesores -> nombre}}  </td>
                        <td> {{$profesores -> contacto}}   </td>
                        <td>  {{$profesores -> escalafon }}  </td>

                    </tr>
                    </tbody>
                </table>
                <hr>
                <form action="{{route("profesores.destroy",$profesores->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <a href="{{route("profesores.index")}}" class="btn btn-info">
                        <span class="fas fa-undo-alt"></span>Regresar</a>
                    <button class="btn btn-danger">   <span class="fas fa-user-times"> Eliminar</button>
                </form>
                 </div>
            </p>

        </div>
    </div>

@endsection
