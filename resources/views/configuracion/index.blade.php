@extends('layouts.app')

@section('content')

<br>
<div class="card text-center">
  <div class="card-header text-primary">
    Configuracion
  </div>
  <div class="card-block">
    <div class="row mt-4">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-block">
        <h3 class="card-title">Roles...</h3>
        <p class="card-text">Los roles son una parte muy importante ya que definen los niveles de jerarquia y a su ves las diferentes actividades para un usuario del sistema.</p>
        <a href="/roles/index" class="btn btn-primary">Administrar Roles</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-block">
        <h3 class="card-title">Catalogo de Categorias...</h3>
        <p class="card-text">Las categorias son una parte importante para los socios ya que ellas definen el monto de facturacion y su espacio correspondiente en el estadio.</p>
        <a href="/categoria/home" class="btn btn-primary">Administrar Categorias</a>
      </div>
    </div>
  </div>

  <div class="col-sm-6 mt-4">
    <div class="card">
      <div class="card-block">
        <h3 class="card-title">Estados...</h3>
        <p class="card-text">Los estados son una parte importante para en todo el funcionamiento del sistema y NO DEBEN ser manipulados sin la devida autorizacion.</p>
        <a href="/estados/home" class="btn btn-primary">Administrar Estados</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6 mt-4">
    <div class="card">
      <div class="card-block">
        <h3 class="card-title">En Construccion</h3>
        <p class="card-text">Area en matenimiento</p>
        <a href="/" class="btn btn-primary">Ir a Inicio</a>
      </div>
    </div>
  </div>
</div>


  </div>
  <div class="card-footer text-muted">
    Cualquier cambio en la configuracion, debe ser consultado con el personal de soporte tecnico..
  </div>
</div>



@endsection

@section('titulo')
Configuracion
@endsection