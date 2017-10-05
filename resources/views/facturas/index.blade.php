@extends('layouts.app')

@section('content')


	@if(session('success')) 
    <br>
    <span class="text-success mt-4">
        
        <label class="alert alert-success">{{ session('success') }}</label>

    </span>

  @endif  

	<!-- Si la sesión tiene algo guardado, muestrelo -->

<div class="jumbotron mt-4">

<h1 class="h1 d-inline ml-4"> En Mantenimiento </h1>

	<div class="list-group mt-4">
  <a href="#" class="list-group-item active">
    Acceder a:
  </a>
  <a href="/facturas/generar" class="list-group-item">Generar facturas del mes</a>
  <a href="/facturas/pagar/buscar" class="list-group-item">Pago de facturas pendientes de un socio</a>
  <ul class="list-group-item">
    <li class="list-unstyled dropdown">
      <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Listar</a>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="/facturas/list">Todas las facturas</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="/facturas/list/3">Facturas pendientes</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="/facturas/list/4">Facturas canceladas</a>
        </div>
    </li>
  </ul>
  <a href="/facturas/buscar" class="list-group-item">Buscar facturas de un socio específico</a>
  <a href="/facturas/recuento" class="list-group-item">Buscar recuento mensual de facturación</a>
</div>

</div>

@endsection

@section('titulo')
    Facturación
@endsection