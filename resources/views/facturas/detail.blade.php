@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-md-8 offset-md-2 mt-5">

             @if(session('success'))
              <div class="card-block">
                <label class=" card-title alert alert-success" style="width: 100%;">{{ session('success') }}</label>
              </div>
              @endif 

           </div>

              <div class="card" style="width: 100%; height: auto;">
                <div class="card-header">
                  <ul class="nav nav-pills card-header-pills ml-5">

                    <li class="nav-item">
                       <h5 class="text-primary">Detalle de factura</h5>
                    </li>

                </div>

             <div class="card-block">
    <div class="container-fluid mt-4 w-100">
<!--_________________________________Socio_______________________________________-->
        <div class="float-left col-md-5">

          <h4 class="card-title col-md-8 mt-2">Información de socio</h4>

               <div class="col-md-15 mt-3">
                <b>Número de socio:</b> 
                {{$factura->socio_id}}
              </div>
              
              <div class="col-md-15 mt-3">
                <b>Nombre completo:</b> 
                {{$factura->primer_nombre}} {{$factura->primer_apellido}} {{$factura->segundo_apellido}}
              </div>

              <div class="col-md-15 mt-3">
                <b>Categoría:</b> 
                {{$factura->categoria}}
              </div>

</div>


<div class="col-md-6 float-right">

                  <h4 class="card-title col-md-8 mt-2">Información de factura</h4>

              <div class="col-md-15 mt-3">
                <b>Número de factura:</b> 
                {{$factura->id}}
              </div>
              
              <div class="col-md-15 mt-3">
                <b>Monto:</b> 
                {{$factura->monto}}
              </div>

              <div class="col-md-15 mt-3">
                <b>Fecha de factura:</b> 
                {{$factura->created_at}}
              </div>

              <div class="col-md-15 mt-3">
                <b>Fecha de pago:</b> 
                {{$factura->updated_at}}
              </div>

              <div class="col-md-15 mt-3">
                <b>Forma de pago:</b> 
                {{$factura->forma_pago}}
              </div>
              
              <div class="col-md-15 mt-3">
                <b>Cobrador:</b> 
                {{$factura->nombre_usuario}}
              </div>
</div>


                        <div class="form-group">
                            <div class="col-md-6 mt-4 ml-3 float-right">
                                <a href="/facturas/list" class="btn btn-outline-success btn-lg">
                                   Regresar
                                </a>
                            </div>
                        </div>
           </div>
        </div>
      </div>
   
@endsection