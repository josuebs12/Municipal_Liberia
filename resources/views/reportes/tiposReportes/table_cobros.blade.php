<div class="table-responsive">
        
    <table id="table" class="table table-hover text-center">
        <thead>
            <tr>
            <th class="text-center">N° de factura</th>
            <th class="text-center">Cobrador</th>
            <th class="text-center">Periodo</th>
            <th class="text-center">Fecha cobro</th>
            <th class="text-center">Monto</th>
            <th class="text-center">Estado</th>
            </tr>
        </thead>
    <tbody>

         @forelse($cobros as $cobro)
                       
        <tr>
            <td class="info"> {{ $cobro->factura_id }} </td>
            <td class="info"> {{ $cobro->primer_nombre }} {{ $cobro->primer_apellido }} {{ $cobro->segundo_apellido }} </td>
            <td class="info"> {{ date('m-Y', strtotime($cobro->fecha_factura)) }} </td>
            <td class="info"> {{ date('d-m-Y', strtotime($cobro->created_at)) }} </td>
            <td class="info"> {{ $cobro->monto }} </td>
            <td class="info"> {{ $cobro->estado }} </td>
        </tr>

        @empty
        <div class="alert alert-warning">
       
        <span class="card-text text-warning "> No se encontraron cobros </span>

        </div>
        <br>
        @endforelse

    </tbody>
    </table>  

    
    </div>