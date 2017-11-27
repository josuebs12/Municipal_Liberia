@extends('layouts.app')

@section('content')

<!-- <div class="card text-center mt-4 py-5">
  <div class="card-header">
    
    <label class="text-primary"> Filtro de Busqueda </label>
    <div class="nav-item float-right">
       <a class="btn btn-warning btn-xs fa fa-exclamation-triangle system-icons" href="/socios/index" ">Regresar</a>
    </div>
  </div>

  <div class="card-block">

  <form>
  
  <select id="select" class="custom-select mb-2 mr-sm-2 mb-sm-0" name="criterio">
    <option selected value="0">Nombre de Usuario</option>
    <option value="1">Nombre o Apellido</option>
  </select>

  <label class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0">
        <input id="valor" type="text" class="form-control" placeholder="Ejemplo: Usuario" type="text" name="valor" value="{{ old('valor') }}" required autofocus onkeyup="filtrar()">
  </label>
  </form> 

</div>

</div>

@if(count($errors))
<div >
<br>
  <span class="text-danger mt-4">
        @if($errors->has('radio'))
          <span class="form-control-feedback">
            <strong>{{ $errors->first('radio') }}</strong>
          </span>
        @endif
  </span>
</div>
@endif -->


@include('mensajes.alertas')

<button class="btn btn-success btn-md mt-3 fa fa-search system-icons" data-toggle="modal" data-target="#filtrar_users"> Realizar una búsqueda</button>
@include('socios.filtrarEjecutivo')

<!--_______________________________ Tabla _____________________________-->
<form method="GET" action="/socios/home" >
  {{ csrf_field() }}
<div class="card text-center mt-4">
  <div class="card-header">
     <label class="text-primary"> Ejecutivos Registrados </label>
    <div class="nav-item float-right">
       <button type="submit" class="btn btn-success btn-xs" style="color: white;">Siguiente</button>
    </div>
  </div>
  <div class="card-body tab-content">
    <div class="tab-pane active" id="tabc" role="tabpanel">
    
    <div class="container-fluid col-md-9">
<div class="row">

 <div class="table-responsive  table-condensed">
        
    <table id="table" WIDTH="100%" class="table table-responsive" >
        <thead>
            <tr>
            <th class="text-center">Nombre de usuario</th>
            <th class="text-center w-50">Nombre Completo</th>
            <th class="text-center">Cédula</th>
            <th class="text-center">Seleccion</th>
            </tr>
        </thead>
    <tbody>

        @if($usuarios !== null)
         @forelse($usuarios as $usuario)
                       
        <tr>
            <td class="info" > {{$usuario->nombre_usuario}} </td>
            <td class="info" > {{$usuario->primer_nombre}} {{$usuario->segundo_nombre}} {{$usuario->primer_apellido}} {{$usuario->segundo_apellido}} </td>
            <td class="info" > {{$usuario->cedula}} </td>
   
            <td class="info"> 
              <input type="radio" name="radio" value="{{$usuario->id}}">
            </td>
        </tr>

        @empty
        <div class="card-text text-warning">No existen usuarios registrados.</div>
        <br>
        @endforelse

    
    </tbody>

    </table>

     <div class="mt-2 mx-auto">
        @if(count($usuarios))

       {{ $usuarios->links('pagination::bootstrap-4') }}

        @endif 

    </div>   

    @endif

        </div>
    </div>

 </div>
    
    </div>
  
  </div>
</div>


</form>

@endsection

@section('titulo')

Nuevo Socio

@endsection