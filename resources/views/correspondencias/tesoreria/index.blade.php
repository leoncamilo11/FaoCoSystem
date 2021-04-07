@extends("../layouts.plantilla")

@section("main")
<div class="mx-auto" style="text-align:center;">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h2 class="panel-title">Leer Correspondencias Tesoreria</h2>
    </div>
    <div class="panel-body">
      <p class="card-text">Lista de correspondencia que se encuentra dentro de la base de datos de tesorerias.</p>
    </div>
  </div>
</div>
<hr>
<nav class="navbar navbar-light float-right">
  <form class="form-inline">
    <input name="buscarPorConsecutivo" class="form-control mr-sm-2" type="search" placeholder="Buscar por Consecutivo" aria-label="Search">
    <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Buscar</button>
  </form>
</nav>
<div class="table-responsive">
  <table class="table table-bordered table-striped table-sm">
  <thead>
    <tr>
      <th scope="col">No.</th>
      <th scope="col">Consecutivo</th>
      <th scope="col">Proveedor</th>
      <th scope="col">Tipo Persona</th>
      <th scope="col">Nit / CC</th>
      <th scope="col">Digito Verificación</th>
      <th scope="col">Responsable</th>
      <th scope="col">Simbolo Proyecto</th>
      <th scope="col">Tipo Pago</th>
      <th scope="col">Valor</th>
      <th scope="col">IVA</th>
      <th scope="col">Impoconsumo</th>
      <th scope="col">Mas Info</th>
      <th scope="col">Anular</th>
    </tr>
  </thead>
  <tbody>
    @if ($tesorerias)
      @foreach($tesorerias as $tesoreria)
        <tr>
          <th scope="row">{{$tesoreria->id}}</th>
          <td>{{$tesoreria->consecutivo}}</td>
          <td>{{$tesoreria->proveedore->nombre}}</td>
          <td>{{$tesoreria->proveedore->tipoDocumento->codigo}}</td>
          <td>{{$tesoreria->proveedore->documento}}</td>
          <td>{{$tesoreria->proveedore->noChequeo}}</td>
          <td>{{$tesoreria->responsable->nombre}} {{$tesoreria->responsable->apellido}}</td>
          <td><!--Simbolo Proyecto--></td>
          <td>{{$tesoreria->tipoPago->tipoPago}}</td>
          <td>{{$tesoreria->valorFactura}}</td>
          <td>{{$tesoreria->valorIva}}</td>
          <td>{{$tesoreria->valorImpoconsumo}}</td>
          <!--Boton para mas información-->
          <td>
            <!-- Botón en HTML (lanza el modal en Bootstrap) -->
            <a href="#ModalRolesUsuario" role="button" class="btn btn-large btn-primary" data-toggle="modal">...</a>

            <!-- Modal / Ventana / Overlay en HTML -->
            <div id="ModalRolesUsuario" class="modal fade">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title">Informacion Adicional</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  </div>
                  <div class="modal-body">

                    <div class="table-responsive">
                      <table class="table table-bordered table-striped table-sm">
                        <thead>
                          <tr>
                            <th scope="col">Activity</th>
                            <th scope="col">Creado</th>
                            <th scope="col">Actualizado</th>
                          </tr>
                        </thead>
                        <tbody>
                            <tr>
                              <td><!--Activity Proyecto--></td>
                              <td>{{$tesoreria->created_at}}</td>
                              <td>{{$tesoreria->updated_at}}</td>
                            </tr>
                        </tbody>
                      </table>
                    </div>

                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                  </div>
                </div>
              </div>
            </div>
          </td>
          <form action="" method="post">
            {{csrf_field()}}
            <input type="hidden" name="_method" value="DELETE">
            <td><button type="submit" class="btn btn-danger btn-sm" name="borrar">Anular</button></td>
          </form>
        </tr>
      @endforeach
    @endif
  </tbody>
  </table>
</div>
@endsection
