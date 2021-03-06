@extends('layouts.app')

@section('content')
<!--El container no se necesita por que ya se implementó-->

    <div class="ml-5 mt-3">



<div class="card " style="width: 90%; height: 85%;">

    @include('mensajes.alertas') 
    <div class="card-header">
        <ul class="nav nav-pills nav-fill card-header-pills">
            <li class="nav-item">
                <h5 class="text-primary">Registrar nuevo usuario</h5>
            </li>
    </div>

  <div class="card-block" >
            
                    <form class="container-fluid mt-4 w-100" method="POST" action="/usuarios/create" >
                        {{ csrf_field() }}

        <div> <!-- No tocar div -->



<!--_________________________________Persona_______________________________________-->
    <div class="d-inline-block col-md-5  ">
    <!--_______________________________ Primer Nombre ______________________________-->

                           <div  class=" col-md-auto  form-group @if($errors->has('primer_nombre')) has-danger @endif">
                            <label for="primer_nombre" class="form-control-label">Primer nombre</label>

                            <div class="col-md-auto  ml-lg-5 ml-xl-5">
                                <input id="primer_nombre" placeholder="Ejemplo: Carlos" type="text" class="form-control" name="primer_nombre" value="{{ old('primer_nombre') }}" required autofocus>

                                 @if($errors->has('primer_nombre'))
                                 @foreach ($errors->get('primer_nombre') as $error)
                                <div class="form-control-feedback">
                                    {{ $error }}
                                </div>
                                 @endforeach
                                @endif
                       
                            </div>
                        </div>

<!--_______________________________ Segundo Nombre ______________________________-->
 

                      <div  class="col-md-auto  form-group{{ $errors->has('segundo_nombre') ? ' has-danger' : '' }}">
                            <label for="segundo_nombre" class="form-control-label">Segundo nombre</label>

                            <div class="col-md-auto ml-lg-5 ml-xl-5">
                                <input id="segundo_nombre" placeholder="Ejemplo: Andrés, opcional*" type="text" class="form-control" name="segundo_nombre" value="{{ old('segundo_nombre') }}">

                                @if ($errors->has('segundo_nombre'))
                                    <span class="form-control-feedback">
                                        <strong>{{ $errors->first('segundo_nombre') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


<!--_______________________________ Primer Apellido  ______________________________-->


                     <div class="col-md-auto  form-group{{ $errors->has('primer_apellido') ? ' has-danger' : '' }}">
                            <label for="primer_apellido" class="form-control-label">Primer apellido</label>

                            <div class="col-md-auto ml-lg-5 ml-xl-5">
                                <input id="primer_apellido" type="text" class="form-control" placeholder="Ejemplo: Ramírez" name="primer_apellido" value="{{ old('primer_apellido') }}" required autofocus>

                                @if ($errors->has('primer_apellido'))
                                    <span class="form-control-feedback">
                                        <strong>{{ $errors->first('primer_apellido') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


<!--_______________________________ Segundo Apellido  ______________________________-->


                     <div class="col-md-auto form-group{{ $errors->has('segundo_apellido') ? ' has-danger' : '' }}">
                            <label for="segundo_apellido" class="form-control-label">Segundo apellido</label>

                            <div class="col-md-auto ml-lg-5 ml-xl-5">
                                <input id="segundo_apellido" placeholder="Ejemplo: Zúñiga" type="text" class="form-control" name="segundo_apellido" value="{{ old('segundo_apellido') }}" required autofocus>

                                @if ($errors->has('segundo_apellido'))
                                    <span class="form-control-feedback">
                                        <strong>{{ $errors->first('segundo_apellido') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


<!--_______________________________ Cedula  ______________________________-->


                     <div class=" col-md-auto  form-group{{ $errors->has('cedula') ? ' has-danger' : '' }}">

                            <label for="cedula" class="form-control-label col-md-auto">Identificación
                               
                            </label>

                            <div class="col-md-auto ml-lg-5 ml-xl-5">
                                <select class="form-control float-right" name="identificacion" id="identificacion">
                                 <option selected value="0"> Tipo de identificación </option>
                                 <option value="1"> Nacional </option>
                                 <option value="2"> Extranjero </option>
                            </select>
                            </div>

                            <div class="col-md-auto ml-lg-5 ml-xl-5 ">
                                <input id="cedula" placeholder="Ejemplo: 101110111" type="text" class="form-control mt-1" name="cedula" value="{{ old('cedula') }}" required autofocus>

                                @if ($errors->has('cedula'))
                                    <span class="form-control-feedback">
                                        <strong>{{ $errors->first('cedula') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


<!--_______________________________ Fecha de nacimiento____________________________-->


                     <div  class=" col-md-auto   form-group{{ $errors->has('fecha_nacimiento') ? ' has-danger' : '' }}">
                            <label for="fecha_nacimiento" class=" form-control-label">Fecha de nacimiento</label>

                            <div class="col-md-auto ml-lg-5 ml-xl-5">

                                <input type="date" name="fecha_nacimiento" class="form-control" id="fecha_nacimiento" value="{{ old('fecha_nacimiento') }}" autofocus required> 
                                @if ($errors->has('fecha_nacimiento'))
                                    <span class="form-control-feedback">
                                        <strong>{{ $errors->first('fecha_nacimiento') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


<!--________________________________________ Roles  _________________________-->
                     <div class=" col-md-auto  form-group{{ $errors->has('rol') ? ' has-danger' : '' }}">
                            <label for="rol" class="form-control-label">Rol</label>

                            <div class="col-md-auto ml-lg-5 ml-xl-5">
                               
                            <select class="form-control" name="rol" id="rol">
                            @foreach($roles as $role)
                                 <option> {{ $role->rol }} </option>
                            @endforeach
                            </select>

                                @if ($errors->has('roles'))
                                    <span class="form-control-feedback">
                                        <strong>{{ $errors->first('roles') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
</div>





<div class="col-md-5 float-right ">

<!--_______________________________Correo Electrónico ____________________________-->


                        <div class="col-md-auto  form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                            <label for="email" class="from-control-label">Correo electrónico</label>

                            <div class="col-md-auto ml-lg-5 ml-xl-5">
                                <input id="email" type="email" placeholder="Ejemplo: carlos@hotmail.com" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="from-control-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


<!--_______________________________ Número de telefono ____________________________-->

                     <div  class=" col-md-auto  form-group{{ $errors->has('telefono') ? ' has-danger' : '' }}">
                            <label for="telefono" class="form-control-label">Número de telefono </label>

                            <div class="col-md-auto ml-lg-5 ml-xl-5">
                                <input id="telefono" placeholder="Ejemplo: 87654321"type="text" class="form-control" name="telefono" value="{{ old('telefono') }}" required autofocus>

                                @if ($errors->has('telefono'))
                                    <span class="form-control-feedback">
                                        <strong>{{ $errors->first('telefono') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>        


 <!--_______________________________ Dirección____________________________-->

            <div class=col-md-auto  form-group{{ $errors->has('direccion') ? ' has-danger' : '' }}">
                            <label for="direccion" class="form-control-label">Dirección</label>

                            <div class="col-md-auto ml-lg-5 ml-xl-5">
                                <textarea id="direccion" type="textarea" placeholder="Ejemplo: Guanacaste, Liberia, del parque central 300m sur ..." class="form-control" name="direccion"  required autofocus>{{ old('direccion') }}</textarea>

                                @if ($errors->has('direccion'))
                                    <span class="form-control-feedback">
                                        <strong>{{ $errors->first('direccion') }}</strong>
                                    </span>

                                @endif
                            </div>
                        </div>


<!--________________________________ Nombre de usuario __________________________-->

                        <div class=" col-md-auto  form-group{{ $errors->has('nombre_usuario') ? ' has-danger' : '' }}">
                            <label for="nombre_usuario" class="form-control-label">Nombre de usuario</label>

                            <div class="col-md-auto ml-lg-5 ml-xl-5">
                                <input id="nombre_usuario" type="text" class="form-control" placeholder="Ejemplo: carlosR" name="nombre_usuario" value="{{ old('nombre_usuario') }}" required autofocus>

                                @if ($errors->has('nombre_usuario'))
                                    <span class="form-control-feedback">
                                        <strong>{{ $errors->first('nombre_usuario') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

<!--________________________________________ Contraseñas _________________________-->
                        <div class=" col-md-auto form-group{{ $errors->has('password') ? ' has-danger' : '' }}">
                            <label for="password" class="form-control-label">Contraseña</label>

                            <div class="col-md-auto ml-lg-5 ml-xl-5">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="form-control-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="col-md-auto ">
                            <label for="password-confirm" class="col-md-10 form-control-label">Confirmar contraseña</label>

                            <div class="col-md-auto ml-lg-5 ml-xl-5">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>



</div>


<!--_____________________________ Botones _________________________________-->
                       
                       
            <div class="row-fluid text-center mt-2">

             <button type="submit" class="btn btn-success fa fa-check system-icons" style="color: white;">
                Registrar
            </button>
              <a href="/usuarios/home" class="btn btn-danger fa fa-times system-icons">
              <span class="glyphicon glyphicon-remove-circle "></span> Cancelar</a>

             
                
            </div>
       
    
            </div>
                    </form>

  </div>
</div>

</div>




@endsection


@section('titulo')

Registrar nuevo usuario

@endsection