@extends('adminlte::page')

@section('content_header')
    <h1 class="m-0 text-dark">Registrar evento</h1>
@stop

@section('content')
    <div>
        <div class="row">
            <x-adminlte-input name="name" label="Nombre" placeholder="Ingrese el nombre"
                              fgroup-class="col-md-6"/>
        </div>
        <div class="row">
            <x-adminlte-textarea name="description" label="Descripcion" placeholder="Descripcion del evento"
                                 fgroup-class="col-md-6">
            </x-adminlte-textarea>
        </div>
    </div>
    <div class="row">
        <x-adminlte-select name="status" label="Estado" fgroup-class="col-md-6">
            <x-slot name="prependSlot">
                <div class="input-group-text bg-gradient-info">
                    <i class="fas fa-calendar-alt"></i>
                </div>
            </x-slot>
            <option>Seleccione</option>
            <option>Borrador</option>
            <option>Publicado</option>
        </x-adminlte-select>
    </div>
    <div class="row">
        <x-adminlte-select2 name="type" label="Tipo"
                            data-placeholder="Selecione una opcion..." fgroup-class="col-md-6">
            <x-slot name="prependSlot">
                <div class="input-group-text bg-gradient-info">
                    <i class="fas fa-calendar-alt"></i>
                </div>
            </x-slot>
            <option/>
            <option>Concierto</option>
            <option>Futbol</option>
            <option>Teatro</option>
            <option>Standuo Comedy</option>
            <option>Festival</option>
        </x-adminlte-select2>
    </div>
    <div class="row">
        @php
            $config = ['format' => 'DD-MM-YYYY'];
        @endphp
        <x-adminlte-input-date name="date" :config="$config" placeholder="Selecione una fecha..."
                               label="Fecha"  fgroup-class="col-md-6">
            <x-slot name="prependSlot">
                <div class="input-group-text bg-gradient-info">
                    <i class="fas fa-clock"></i>
                </div>
            </x-slot>
        </x-adminlte-input-date>
    </div>
    <div class="row">
        <div class="form-group col-md-6">
            <x-adminlte-button label="Registrar" theme="primary" icon="fas fa-save"/>
        </div>
    </div>
@stop
