<div id="buscar_ejemoroso" class="modal fade" role="dialog">
                      <div class="modal-dialog modal-lg">

                        <div class="modal-content">
                          <div class="modal-header">
                            <h4 class="modal-title">Consultar morosidad de un ejecutivo</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                          </div>
                          <div class="modal-body text-left">
            <form method="POST" action="/cobros/usuarios/morosos/consultar">
              {{ csrf_field() }}
              
  <select id="select_ejec" class="custom-select" name="Criterio">
    <option value="1">Cedula</option>
    <option selected value="2">Nombre de usuario</option>
  </select>

  <label class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0">
        <input id="valor_ejec" type="text" class="form-control" placeholder="Buscar" type="text" name="valor" value="{{ old('valor') }}" required autofocus>
  </label>

        <button type="submit" class="btn btn-success mb-1">Buscar</button>               
            </form>
        
</div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-danger fa fa-times system-icons" data-dismiss="modal"> Cerrar</button>
                          </div>
                        </div>

                      </div>
                    </div>