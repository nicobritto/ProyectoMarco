@extends('adminlte::page')

@section('content_header')
    <h1 class="m-0 text-dark">Eventos</h1>
@stop

@section('content')
    <div class="card">
        <div class="car-body">
            <x-adminlte-datatable id="table1" :heads="$heads" striped head-theme="dark" with-buttons>
                @foreach($teachers as $teacher)
                    <tr>
                        <td>{{ $teacher->id }}</td>
                        <td>{{ $teacher->name }}</td>
                        <td>{{ $teacher->specialization }}</td>
                        <td>{{ $teacher->email }}</td>
                        <td>{{ $teacher->hireDate }}</td>
                        <td>{{ $teacher->rank }}</td>
                    </tr>
                @endforeach
            </x-adminlte-datatable>
        </div>
    </div>
@stop
