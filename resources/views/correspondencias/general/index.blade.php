@extends("../layouts.plantilla")

@section("main")
<div class="mx-auto" style="text-align:center;">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h2 class="panel-title">Leer Correspondencias Generales</h2>
    </div>
    <div class="panel-body">
      <p class="card-text">Lista de correspondencia que se encuentra dentro de la base de datos.</p>
    </div>
  </div>
</div>
<hr>
<div class="table-responsive">
  <table class="table table-bordered table-striped table-sm">
  <thead>
    <tr>
      <th scope="col">No.</th>
      <th scope="col">Consecutivo</th>
      <th scope="col">Recepcionista Registro</th>
      <th scope="col">Numero Guia</th>
      <th scope="col">Remitente</th>
      <th scope="col">Detalles</th>
      <th scope="col">Ciudad Envio</th>
      <th scope="col">Ciudad Recibido</th>
      <th scope="col">Estado</th>
      <th scope="col">Usuario Recibe</th>
      <th scope="col">Creado</th>
      <th scope="col">Actualizado</th>
      <th scope="col">Editar</th>
      <th scope="col">Borrar</th>
    </tr>
  </thead>
  <tbody>
    @if ($correspondencias)
      @foreach($correspondencias as $correspondencia)
        <tr>
          <th scope="row">{{$correspondencia->id}}</th>
          <td>{{$correspondencia->consecutivo}}</td>
          <td>{{$correspondencia->recepcionistaRegistra->nombre}}</td>
          <td>{{$correspondencia->numeroGuia}}</td>

          <!--Condicional-->
          <td>{{$correspondencia->remitenteE}}</td>
          <!--<td>{{$correspondencia->remitenteC_id}}</td>
          <td>{{$correspondencia->remitenteP_id}}</td>-->

          <td>{{$correspondencia->detalles}}</td>
          <td>{{$correspondencia->ciudadE->nombre}}</td>
          <td>{{$correspondencia->ciudadR->nombre}}</td>
          <td>{{$correspondencia->estado->estado}}</td>
          <td>{{$correspondencia->usuarioRecibe->nombre}}</td>
          <td>{{$correspondencia->created_at}}</td>
          <td>{{$correspondencia->updated_at}}</td>
          <form action="" method="put">
            {{csrf_field()}}
            <input type="hidden" name="_method" value="EDIT">
            <td><button type="submit" class="btn btn-success btn-sm" name="editar">Editar</button></td>
          </form>
          <form action="" method="post">
            {{csrf_field()}}
            <input type="hidden" name="_method" value="DELETE">
            <td><button type="submit" class="btn btn-danger btn-sm" name="borrar">Borrar</button></td>
          </form>
        </tr>
      @endforeach
    @endif
  </tbody>
  </table>
</div>
@endsection
