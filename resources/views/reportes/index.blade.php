@extends('layouts.app')

@section('content')

<div class="col-md-8 offset-md-2">

@include('mensajes.alertas')

</div>
<br>
<div class="card text-center">
  <div class="card-header text-primary">
    Menú de reportes
  </div>
  <div class="card-block">
    <div class="row py-4">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-block">
        <div class="py-3">
            <i class="fa fa-user-o iconos" aria-hidden="true"></i>                          
        </div>
        <h3 class="card-title"><b>Usuarios</b></h3>
        <p class="card-text">Reportes de usuarios por su condición y tipo.</p>
        <div class="py-3">
          <a href="#" class="list-group-item" target="_blank" data-toggle="modal" data-target="#buscar_usuario">Socios de un usuario ejecutivo</a>
          @include('reportes.tiposReportes.buscar_usuario')
          <ul class="list-group-item">
            <li class="list-unstyled dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Reporte de:</a>
              <div class="dropdown-menu">
               <a class="dropdown-item" href="/reportes/allUser" target="_blank">Todos los usuarios</a>
               <div class="dropdown-divider"></div>
               <a class="dropdown-item" href="/reportes/estadoUser/1" target="_blank">Usuarios activos</a>
               <div class="dropdown-divider"></div>
               <a class="dropdown-item" href="/reportes/estadoUser/2" target="_blank">Usuarios inactivos</a>
               </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-block">
        <div class="py-3">
            <i class="fa fa-users iconos" aria-hidden="true"></i>                          
        </div>
        <h3 class="card-title"><b>Socios</b></h3>
        <p class="card-text">Reportes de socios por condición y categoría.</p>
        <div class="py-3">
          <a href="/reportes/sociosMorosos" class="list-group-item" target="_blank">Morosidad</a>
          <ul class="list-group-item">
            <li class="list-unstyled dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Reporte de:</a>
              <div class="dropdown-menu">
               <a class="dropdown-item" href="/reportes/todosLosSocios" target="_blank">Todos los socios</a>
               <div class="dropdown-divider"></div>
               <a class="dropdown-item" href="/reportes/sociosActividad/1" target="_blank">Socios activos</a>
               <div class="dropdown-divider"></div>
               <a class="dropdown-item" href="/reportes/sociosActividad/2" target="_blank">Socios inactivos</a>
               </div>
            </li>
          </ul>
          
        </div>
      </div>
    </div>
  </div>

  <div class="col-sm-6 mt-4">
    <div class="card">
      <div class="card-block">
        <div class="py-3">
            <i class="fa fa-file-text-o iconos" aria-hidden="true"></i>                          
        </div>
        <h3 class="card-title"><b>Facturas</b></h3>
        <p class="card-text">Reportes asociados a la facturación del sistema.</p>
        <div class="py-3">
          <a href="#" class="list-group-item" target="_blank" data-toggle="modal" data-target="#buscar_factura" target="_blank">Factura en específico</a>
          @include('reportes.tiposReportes.buscar_factura')
          <ul class="list-group-item">
            <li class="list-unstyled dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Reporte de:</a>
              <div class="dropdown-menu">
               <a class="dropdown-item" href="#" data-toggle="modal" data-target="#buscar_facturas_fechas" target="_blank">Facturas rago de fecha</a>
               <div class="dropdown-divider"></div>
               <a class="dropdown-item" href="/reportes/facturas_pendientes" target="_blank">Facturas pendientes</a>
               <div class="dropdown-divider"></div>
               <a class="dropdown-item" href="/reportes/facturasPagadas" target="_blank">Facturas pagadas</a>
               </div>
            </li>
          </ul>
               @include('reportes.tiposReportes.buscar_facturas_fechas')
        </div>
      </div>
    </div>
  </div>
  <div class="col-sm-6 mt-4">
    <div class="card">
      <div class="card-block">
        <div class="py-3">
            <i class="fa fa-money iconos" aria-hidden="true"></i>                          
        </div>
        <h3 class="card-title"><b>Liquidación de Cobros</b></h3>
        <p class="card-text">Reportes sobre la liquidación de cobros de los usuarios ejecutivos.</p>
        <div class="py-3">
           <ul class="list-group-item">
            <li class="list-unstyled dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Morosidad:</a>
              <div class="dropdown-menu">
               <a class="dropdown-item" href="/reportes/users_morosos" target="_blank">Todos los ejecutivos</a>
               <div class="dropdown-divider"></div>
               <a class="dropdown-item" href="#" data-toggle="modal" data-target="#buscar_ejemoroso" target="_blank">Un ejecutivo</a>
               </div>
            </li>
          </ul>
          @include('reportes.tiposReportes.buscar_usuario_moroso')
          <ul class="list-group-item">
            <li class="list-unstyled dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Reporte de:</a>
              <div class="dropdown-menu">
               <a class="dropdown-item" href="#" data-toggle="modal" data-target="#buscar_cobros_fechas" target="_blank">Cobros por fecha</a>
               <div class="dropdown-divider"></div>
               <a class="dropdown-item" href="/reportes/cobros_liquidados" target="_blank">Cobros Liquidados</a>
               <div class="dropdown-divider"></div>
               <a class="dropdown-item" href="/reportes/cobros_pendientes" target="_blank">Cobros Pendientes</a>
               <div class="dropdown-divider"></div>
               <div class="dropdown-submenu col-12" style="">  
                <a id="subRoles" tabindex="-1" href="#" style="">Comisiones</a>
                <ul class="dropdown-menu col-12">
                 
                  <li><a id="subRoles" tabindex="-1" href="/reportes/comisiones" target="_blank">Todas</a></li>
                  <div class="dropdown-divider"></div>
                  <li><a  id="subRoles" href="#" data-toggle="modal" data-target="#buscar_comisiones_fechas" target="_blank">Por fecha</a></li>
                  <div class="dropdown-divider"></div>
                  <li><a  id="subRoles" href="#" data-toggle="modal" data-target="#buscar_comisiones_user" target="_blank">Por ejecutivo</a></li>
                  <div class="dropdown-divider"></div>
                  <li><a id="subRoles" href="#" data-toggle="modal" data-target="#buscar_comisiones_fechas_user" target="_blank">Por fecha y ejecutivo</a></li>
             
                </ul>
            </div>
               </div>
            </li>
          </ul>
          @include('reportes.tiposReportes.buscar_cobros_fechas')
          @include('reportes.tiposReportes.buscar_comisiones_fechas')
          @include('reportes.tiposReportes.buscar_comisiones_usuario')
          @include('reportes.tiposReportes.buscar_comisiones_fechas_user')
        </div>
      </div>
    </div>
  </div>
</div>
  <div class="row d-flex justify-content-center">
    <a href="/" class="btn btn-warning">Regresar a inicio</a>
  </div>
  
  </div>
  <div class="card-footer text-muted">
    Todo reporte esta sujeto a una fecha específica.
  </div>
</div>



@endsection

@section('titulo')
Modulo Reportes
@endsection