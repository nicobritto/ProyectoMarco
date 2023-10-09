@extends('layout.plantilla')

@section("tituloPagina","Crear un nuevo registro")

@section('contenido')

    <div class="card">
            <h5 class="card-header">Agregar Nuevo Docente</h5>
        <div class="card-body">

            <p class="card-text">
            <form action="{{route('profesores.store')}}" method="post">
                @csrf
                <label for="nombre">Nombre:</label>
                <input class="form-control"  type="text" id="nombre" name="nombre" required><br><br>

                <label for="contacto">Contacto:</label>
                    <input class="form-control"  type="number" id="contacto" name="contacto" required><br><br>

                <label for="escalafon">Escalafón:</label>
                <input class="form-control"  type="text" id="escalafon" name="escalafon" required><br><br>

                <a href="{{route("profesores.index")}}" class="btn btn-info">
                    <span class="fas fa-undo-alt"></span>Regresar</a>
                <button class="btn btn-primary">
                    <span class="fas fa-user-plus"> </span>Agregar</button>

            </form>
            </p>

        </div>
    </div>

@endsection






















