@extends('layouts.app')

@section('content')
    <div class="row" >

        <div class="col-sm-12">
            <div class="panel panel-default d-flex justify-content-center">
                
                    <form method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                          @if(session('success')) 
                    <br>
                    <span class="text-success mt-4">
        
                 <label class="alert alert-danger">{{ session('success') }}</label>

                 </span>

                    @endif 
                            <h1 class="display-4">Iniciar Sesión</h1>

                        <div class="form-group{{ $errors->has('nombre_usuario') ? ' has-danger' : '' }} pt-2s">
                            <label for="nombre_usuario" class="col-md-6 form-control-label">Nombre de usuario</label>

                            <div class="col-md-6">
                                <input id="nombre_usuario" type="text" class="form-control" name="nombre_usuario" value="{{ old('nombre_usuario') }}" required autofocus>

                                @if ($errors->has('nombre_usuario'))
                                    <span class="form-control-feedback">
                                        <strong>{{ $errors->first('nombre_usuario') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-danger' : '' }}">
                            <label for="password" class="col-md-4 form-control-label">Contraseña</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="form-control-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> 
                                        Recuérdame.
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8">
                                <button type="submit" class="btn btn-primary">
                                    Ingresar
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    ¿Ha olvidado su contraseña?
                                </a>

                                
                            </div>
                        </div>
                    </form>
        </div>
    </div>
</div>
@endsection
