@extends('adminlte::page')

@section('content_header')
    <h1 class="m-0 text-dark">Registrar evento</h1>
@stop

@section('content')
    <form action="{{ route('teachers.store') }}" method="post">
        @csrf
        <div class="row">
        <x-adminlte-input name="name" label="Nombre" placeholder="Ingrese el nombre"
                              fgroup-class="col-md-6"/>
        </div>
        <div class="row">
            <x-adminlte-input name="specialization" label="Especialidad" placeholder="Ingrese su Especialidad"
                              fgroup-class="col-md-6"/>
        </div>
        <div class="row">
            <x-adminlte-input name="email" type="email" label="Email" placeholder="mail@example.com"
                                  fgroup-class="col-md-6"/>
        </div>
        <div class="row">
            @php
                $config = ['format' => 'DD-MM-YYYY'];
            @endphp
            <x-adminlte-input-date name="hireDate" :config="$config" placeholder="Ingrese una fecha..."
                                   label="Fecha de Contratacion"  fgroup-class="col-md-6">
                <x-slot name="prependSlot">
                    <div class="input-group-text bg-gradient-info">
                        <i class="fas fa-clock"></i>
                    </div>
                </x-slot>
            </x-adminlte-input-date>
        </div>
        <div class="row">
            <x-adminlte-select2 name="rank" label="Escalafon"
                                data-placeholder="Selecione una opcion..." fgroup-class="col-md-6">
                <x-slot name="prependSlot">
                    <div class="input-group-text bg-gradient-info">
                        <i class="fas fa-calendar-alt"></i>
                    </div>
                </x-slot>
                <option/>
                <option>Grado 1</option>
                <option>Grado 2</option>
                <option>Grado 3</option>
            </x-adminlte-select2>
        </div>
        <div class="row">
            <div class="form-group col-md-6">
                <x-adminlte-button label="Registrar" theme="primary" icon="fas fa-save"/>
            </div>
        </div>
    </form>
@stop
