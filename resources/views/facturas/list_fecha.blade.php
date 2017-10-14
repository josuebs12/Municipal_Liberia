@extends('layouts.app')

@section('content')

@if(session('success')) 
    <br>
    <span class="text-success mt-4">
        
        <label class="alert alert-success">{{ session('success') }}</label>

    </span>

    @endif

@if(count($facturas))
  <div class="card text-center mt-4">
  <div class="card-header text-primary">
    Filtro de Busqueda
  </div>

  <div class="card-block">

    @include('facturas.filtrar')
</div>
</div>
@endif
  
<!--_______________________________ Tabla _____________________________-->

<div class="card text-center mt-4">
<div class="card-header">
      <div class="col-md-2 float-right">
        <a href="/facturas/mostrar/recuento/{{$desde}}/{{$hasta}}" class="btn btn-warning btn-md">
           Regresar
        </a>
   </div>
  </div> 
<div class="col-md-auto offset-md-1 mt-4">

<div class="row">

  @include('facturas.table')
    </div>

 </div>

<div class="mt-2 mx-auto">
        @if(count($facturas))

       {{ $facturas->links('pagination::bootstrap-4') }}

        @endif 
    </div>

    <div class="card-footer text-muted">
        Se encontraron {{ count($facturas) }} resultados.

    </div>
</div>

@endsection

@section('titulo')

Facturas

@endsection