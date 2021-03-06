@extends('layouts.app')

@section('content')

@include('mensajes.alertas') 

<button class="btn btn-success btn-md mt-3 Realizar una búsqueda fa fa-search system-icons" data-toggle="modal" data-target="#filtrar_cobros"> Realizar una búsqueda</button>
@include('cobros.filtrar')

<!--_______________________________ Tabla _____________________________-->

<div class="card text-center mt-4">
<div class="card-header nav-fill">
  <div class="card-tittle text-primary h3">
    @if(isset($estado_id))
        @if($estado_id == 3) <b>Cobros pendientes de liquidar</b> @endif
        @if($estado_id == 4) <b>Cobros liquidados</b> @endif
        @if($estado_id == 0) <b>Todos los cobros</b> @endif
    @else <b>Todos los cobros</b>
    @endif
  </div>
    <ul class="row" id="outerTab" role="tablist">
      <li class="col-md-4 system-icons">
        <a class="nav-link text-primary" href="/cobros/list">Listado de Cobros</a>
      </li>
  
         <li class="col-md-4 dropdown system-icons">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Listar</a>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="/cobros/list">Todas los cobros</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="/cobros/list/3">Cobros pendientes</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="/cobros/list/4">Cobros cancelados</a>
        </div>
    </li>
    <li class="nav-item">
      <div class="col-md-4">
        <a href="/facturas/index" class="btn btn-warning btn-xs mb-2 fa fa-exclamation-triangle system-icons">
            Regresar
        </a>
   </div>
    </li>
       </center>
    </ul>
    
  </div> 
<div id="tabla_cobros" class="col-md-10 offset-md-1 mt-4 mr-4">

<div class="row">

  @include('cobros.table')
    </div>

 </div>

<div class="mt-2 mx-auto">
        @if(count($cobros))

       {{ $cobros->links('pagination::bootstrap-4') }}

        @endif 
    </div>
</div>

@endsection

@section('titulo')

Cobros

@endsection