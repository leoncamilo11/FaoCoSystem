@extends("../layouts.plantilla")

@section("main")
  <div class="mx-auto" style="text-align:center;">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h2 class="panel-title">Insertar Correspondencia General</h2>
      </div>
      <div class="panel-body">
        <p class="card-text">Edite los camposque desea cambiar</p>
      </div>
    </div>
  </div>
  <hr>
  <div class="mx-auto" style="width:1200px;">
    <form name="formRegistroCorrespondencia" method="post" action="/correspondencias/general/{{$correspondencia->id}}">
      <div class="row">
        <div class="form-group col s3">
          <label>Consecutivo</label><br>
          <input type="text" class="form-control" id="consecutivo" name="consecutivo" value="{{$correspondencia->consecutivo}}" disabled>
        </div>
        <div class="form-group col s3"></div>
        <div class="form-group col s3">
          <label>Fecha Registro</label>
          <input type="datetime" class="form-control" name="fechaR_id" value="{{$correspondencia->created_at}}" disabled>
        </div>
      </div>
      <div class="row">
        <div class="form-group col s3">
          <label>Persona que registra</label>
          <input type="text" class="form-control" name="" value="{{$correspondencia->recepcionistaRegistra->nombre}} {{$correspondencia->recepcionistaRegistra->apellido}}" disabled>
        </div>
        <div class="form-group col s3 {{ $errors->has('codigoArchivo_id') ? 'has-error' : '' }}">
          <label>Codigo de archivo</label>
          <input type="text" class="form-control" name="" value="{{$correspondencia->codigoArchivo->codigoArchivo}}" disabled>
        </div>
        <div class="form-group col s3 {{ $errors->has('tipoCorrespondencia_id') ? 'has-error' : '' }}">
          <label>Tipo de Documento</label>
          <input type="text" class="form-control" name="" value="{{$correspondencia->tipoCorrespondencia->tipoCorrespondencia}}" disabled>
        </div>
      </div>
      <div class="row">
        <div class="col" style="background: #e4e4e4; border-radius: 10px;">
          <div class="row">
            <div class="form-group col s3 {{ $errors->has('usuarioSolicita_id') ? 'has-error' : '' }}">
              <label>Usuario que Solicita</label>
              <input type="text" class="form-control" name="" value="{{$correspondencia->usuarioSolicita->nombre}} {{$correspondencia->usuarioSolicita->apellido}}" disabled>
            </div>
            <div class="form-group col s3">
              <label>Entidad del Usuario</label>
              <input type="text" class="form-control" id="entidadSolicita" name="entidadSolicita" value="{{$correspondencia->usuarioSolicita->entidade->entidad}}" disabled>
            </div>
          </div>
        </div>
        <div class="col-auto"></div>
        <div class="col" style="background: #e4e4e4; border-radius: 10px;">
          <div class="row">
            <div class="form-group col s3">
              <label>Usuario que Recibe</label>
              <input type="text" class="form-control" name="" value="{{$correspondencia->usuarioRecibe->nombre}} {{$correspondencia->usuarioRecibe->apellido}}" disabled>
            </div>
            <div class="form-group col s3">
              <label>Entidad del Usuario</label>
              <input type="text" class="form-control" name="entidadRecibe" value="{{$correspondencia->usuarioRecibe->entidade->entidad}}" disabled>
            </div>
          </div>
          <div class="row">
            <div class="form-group col s3 {{ $errors->has('usuarioRecibe_id') ? 'has-error' : '' }}">
              <label>Nuevo Usuario que Recibe</label>
              <select id="usuarioRecibe_id" name="usuarioRecibe_id" class="form-control">
                <option value="" disabled>Seleccion un Usuario</option>
                <option value="{{$correspondencia->usuarioRecibe->id}}" selected>{{$correspondencia->usuarioRecibe->nombre}} {{$correspondencia->usuarioRecibe->apellido}}</option>
                @foreach($usuariosRecibe as $usuarioRecibe)
                  <option value="{{$usuarioRecibe->id}}">{{$usuarioRecibe->nombre}} {{$usuarioRecibe->apellido}}</option>
                @endforeach
              </select>
              {!!$errors->first('usuarioRecibe_id', '<span class="help-block"><div class="alert alert-danger" role="alert" style="padding: 0px;">:message</div></span>')!!}
            </div>
            <div class="form-group col s3">
              <label>Entidad del Usuario</label>
              <input type="text" class="form-control" id="entidadRecibe" name="entidadRecibe" placeholder="-" disabled>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="form-group col">
          <label>Detalles</label>
          <textarea type="textarea" class="form-control" name="detalle" style="resize: none;">{{$correspondencia->detalles}}</textarea>
        </div>
      </div>
      {{csrf_field()}}
      <input type="hidden" name="_method" value="PUT">
      <button type="submit" class="btn btn-primary" name="enviar">Enviar</button>
    </form>
  </div>
  <!--@if(count($errors)>0)
    @foreach($errors->all() as $error)
      <li>{{$error}}</li>
    @endforeach
  @endif-->
@endsection
