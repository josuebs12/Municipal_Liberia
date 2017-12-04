@extends('reportes.reporte')

@section('header')

@include('reportes.encabezados.encabezadoReportes')

@endsection

@section('contenido')

    <div class="print">
    @include('reportes.imprimir')
    </div>
    
<div class="table-responsive">
        
    <table id="table" class="table table-hover">
        <thead>
            <tr>
            <th class="text-center">Cedula</th>
            <th class="text-center">Nombre Completo</th>
            <th class="text-center">Rol</th>
            <th class="text-center">Estado</th>
            <th class="text-center print">Correo Electronico</th>
            </tr>
        </thead>

    <tbody>
        
        @if($listas != null)
         @forelse($listas as $lista)

        <tr>
            <td class="info text-center"> {{ $lista->cedula }} </td>
            <td class="info text-center"> {{ $lista->primer_nombre }} {{ $lista->primer_apellido }} {{ $lista->segundo_apellido }} </td>
            <td class="info text-center"> {{ $lista->rol }} </td>
            <td class="info text-center"> {{ $lista->estado }} </td>
            <td class="info text-center print"> {{ $lista->email }} </td>
        </tr>
        @empty
        <div class="alert alert-warning">
       
        <span class="card-text text-warning "> No se encontraron datos... </span>

        </div>
        <br>
        @endforelse

        @endif
    </tbody>

    </table>  
    </div>

    

@endsection