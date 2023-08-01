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
      <th scope="col">Codigo Archivo</th>
      <th scope="col">Recepcionista Registro</th>
      <th scope="col">Tipo Documento</th>
      <th scope="col">Usuario Radica</th>
      <th scope="col">Entidad</th>
      <th scope="col">Destinatario</th>
      <th scope="col">Entidad</th>
      <th scope="col">Detalles</th>
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
          <td>{{$correspondencia->codigoArchivo->codigoArchivo}}</td>
          <td>{{$correspondencia->recepcionistaRegistra->nombre}}</td>
          <td>{{$correspondencia->tipoCorrespondencia->tipoCorrespondencia}}</td>
          <td>{{$correspondencia->usuarioSolicita->nombre}} {{$correspondencia->usuarioSolicita->apellido}}</td>
          <td>{{$correspondencia->usuarioSolicita->entidade->entidad}}</td>
          <td>{{$correspondencia->destinatario}}</td>
          <td>{{$correspondencia->entidadeDestinatario->entidad}}</td>
          <td>{{$correspondencia->detalles}}</td>
          <td>{{$correspondencia->created_at}}</td>
          <td>{{$correspondencia->updated_at}}</td>
          <form action="/correspondencias/general/{{$correspondencia->id}}/edit" method="put">
            {{csrf_field()}}
            <input type="hidden" name="_method" value="EDIT">
            <td><button type="submit" class="btn btn-success btn-sm" name="editar">Editar</button></td>
          </form>
          <form action="/correspondencias/general/{{$correspondencia->id}}" method="post">
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
{{$correspondencias->links()}}
@endsection
