<div id="buscar_anular" class="modal fade" role="dialog">
                      <div class="modal-dialog modal-lg">

                        <div class="modal-content">
                          <div class="modal-header">
                            <h4 class="modal-title">Buscar usuario a anular</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                          </div>
 
                          <div class="modal-body text-left">



  <form method="POST" action="/cobros/buscar/anular"> 
    {{ csrf_field() }}

   <center>
  <select class="custom-select" name="Criterio">
    <option value="1">Cedula</option>
    <option selected value="2">Nombre de usuario</option>
  </select>

  <label >
        <input type="text" class="form-control" placeholder="Buscar" type="text" name="valor" value="{{ old('valor') }}" required autofocus>
  </label>

        <button class="btn btn-success mb-1 fa fa-search system-icons" type="submit"> Buscar</button>
   </center>
  </form>  
 
</div>

                          <div class="modal-footer">
                            <button type="button" class="btn btn-danger fa fa-times system-icons" data-dismiss="modal"> Cerrar</button>
                          </div>
                        </div>

                      </div>
                    </div>