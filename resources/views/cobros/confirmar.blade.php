@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-md-8 offset-md-2 mt-5">

             @include('mensajes.alertas')

           </div>

              <div class="card" style="width: 100%; height: auto;">
                <div class="card-header text-center text-primary">
                  <b>Registro de cobro</b>
                  
                </div>

             <div class="card-block">
    <div class="container-fluid mt-4 w-100">
      <form class="form-horizontal" action="/cobros/liquidar" method="POST">
                        {{ csrf_field() }}
        <div class="float-left col-md-5">

          <h4 class="card-title col-md-8 mt-2">Información de usuario</h4>

               <div class="col-md-15 mt-3">
                <b>Nombre de usuario:</b> 
                {{$user->nombre_usuario}}
              </div>

              <div class="col-md-15 mt-3">
                <b>Cédula:</b> 
                {{$user->cedula}}
              </div>
              
              <div class="col-md-15 mt-3">
                <b>Nombre completo:</b> 
                {{$user->primer_nombre}} {{$user->primer_apellido}} {{$user->segundo_apellido}}
              </div>

</div>


<div class="col-md-6 float-right">

                  <h4 class="card-title col-md-8 mt-2">Información de cobros</h4>

              <div class="col-md-15 mt-3">
                <b>Número de cobros a cancelar:</b> 
                {{ count($cobros) }}
                @foreach($cobros as $cobro)
                <input type="hidden" name="{{$cobro}}" value="{{$cobro}}">
                @endforeach
              </div>
              
              <div class="col-md-15 mt-3">
                <b>Monto total:</b> 
                {{round($monto, 0, PHP_ROUND_HALF_UP)}}
              </div>

              <div class="col-md-15 mt-3">
                <b>Fecha de pago:</b> 
                {{$fecha}}
              </div>
</div>


                   <center class="form-group ">
            <div class="row-fluid">

             <button type="submit" class="btn btn-success btn-xs mt-4 fa fa-check system-icons" style="color: white;">
                Confirmar
            </button>


              <a href="{{URL::previous()}}" class="btn btn-danger  btn-xs mt-4 fa fa-times system-icons">
              <span class="glyphicon glyphicon-remove-circle"></span> Cancelar</a>

             
                
            </div>
        </center>
                      </form>
           </div>
        </div>
      </div>
    </div>
   
@endsection
