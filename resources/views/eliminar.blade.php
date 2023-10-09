@extends('layout.plantilla')

@section("tituloPagina","Crear un nuevo registro")

@section('contenido')

    <div class="card">
        <h5 class="card-header">Eliminar   Docente</h5>
        <div class="card-body">

            <p class="card-text">

                <div class="alert alert-danger" role="alert">
                    Estas seguro de eliminar este registro

                <table class="table table-sm table-hover">
                    <thead>
                    <th>Nombre</th>
                    <th>Contacto</th>
                    <th>Escalafon</th>
                    </thead>

                    <tbody>
                    <tr>
                        <td> asd</td>
                        <td>asd </td>
                        <td>asd </td>

                    </tr>
                    </tbody>
                </table>
                <hr>
                <form action="">
                    <a href="{{route("profesores.index")}}" class="btn btn-info">
                        <span class="fas fa-undo-alt"></span>Regresar</a>
                    <button class="btn btn-danger">   <span class="fas fa-user-times"> Eliminar</button>
                </form>
                 </div>
            </p>

        </div>
    </div>

@endsection
