@extends('layout.plantilla')

@section("tituloPagina","Crear un nuevo registro")

@section('contenido')

    <div class="card">
            <h5 class="card-header">Agregar Nuevo Docente</h5>
        <div class="card-body">

            <p class="card-text">
            <form action="#" method="post">
                <label for="nombre">Nombre:</label>
                <input class="form-control"  type="text" id="nombre" name="nombre" required><br><br>

                <label for="contacto">Contacto:</label>
                    <input class="form-control"  type="text" id="contacto" name="contacto" required><br><br>

                <label for="escalafon">Escalafón:</label>
                <input class="form-control"  type="text" id="escalafon" name="escalafon" required><br><br>

                <a href="{{route("profesores.index")}}" class="btn btn-info">Regresar</a>
                <button class="btn btn-primary">Agregar</button>

            </form>
            </p>

        </div>
    </div>

@endsection






















