@extends("../layouts.plantilla")

@section("main")
  <div class="mx-auto" style="text-align:center;">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h2 class="panel-title">Insertar Correspondencia General</h2>
      </div>
      <div class="panel-body">
        <p class="card-text">Edite los campos que desea cambiar</p>
        <p class="card-text">Si uno de los campos habilitados para editar no lo desea cambiar, dejar el mismo valor en el nuevo campo, si no edita ninguno, salir sin enviar</p>
        <p class="card-text">Tenga en cuenta que si deja algun campo en blanco o lo modifica por error sin corregirlo, se hara el guardado de la seleccion del campo</p>
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
        <div class="form-group col s3">
          <label>Codigo de archivo</label>
          <input type="text" class="form-control" name="" value="{{$correspondencia->codigoArchivo->codigoArchivo}}" disabled>
        </div>
        <div class="form-group col s3">
          <label>Tipo de Documento</label>
          <input type="text" class="form-control" name="" value="{{$correspondencia->tipoCorrespondencia->tipoCorrespondencia}}" disabled>
        </div>
        <div class="form-group col s3 {{ $errors->has('tipoCorrespondencia_id') ? 'has-error' : '' }}">
          <label>Nuevo Tipo de Documento</label>
          <select name="tipoCorrespondencia_id" class="form-control">
            <option value="{{$correspondencia->tipoCorrespondencia->id}}" selected disabled>{{$correspondencia->tipoCorrespondencia->tipoCorrespondencia}}</option>
            @foreach($tiposCorrespondencia as $tipoCorrespondencia)
              <option value="{{$tipoCorrespondencia->id}}">{{$tipoCorrespondencia->tipoCorrespondencia}}</option>
            @endforeach
          </select>
          {!!$errors->first('tipoCorrespondencia_id', '<span class="help-block"><div class=º"alert alert-danger" role="alert" style="padding: 0px;">:message</div></span>')!!}
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
              <label>Entidad Usuario</label>
              <input type="text" class="form-control" id="#" name="#" value="{{$correspondencia->usuarioSolicita->entidade->entidad}}" disabled>
            </div>
          </div>
          <div class="row">
            <div class="form-group col s3 {{ $errors->has('usuarioSolicita_id') ? 'has-error' : '' }}">
              <label>Nuevo Usuario que Radica</label>
              <select id="usuarioSolicita_id" name="usuarioSolicita_id" class="form-control selectpicker show-menu-arrow" data-live-search="true" title="-- Seleccione Usuario --">
                <option value="{{$correspondencia->usuarioSolicita->id}}" selected disabled>{{$correspondencia->usuarioSolicita->nombre}} {{$correspondencia->usuarioSolicita->apellido}}</option>
                @foreach($usuariosSolicita as $usuarioSolicita)
                  <option value="{{$usuarioSolicita->id}}">{{$usuarioSolicita->nombre}} {{$usuarioSolicita->apellido}}</option>
                @endforeach
              </select>
              {!!$errors->first('usuarioSolicita_id', '<span class="help-block"><div class="alert alert-danger" role="alert" style="padding: 0px;">:message</div></span>')!!}
            </div>
            <div class="form-group col s3">
              <label>Nueva Entidad Usuario</label>
              <input type="text" class="form-control" id="entidadSolicita" name="entidadSolicita" value="{{$correspondencia->usuarioSolicita->entidade->entidad}}" disabled>
            </div>
          </div>
        </div>
        <div class="col-auto"></div>
        <div class="col" style="background: #e4e4e4; border-radius: 10px;">
          <div class="row">
            <div class="form-group col s3">
              <label>Destinatario</label>
              <input type="text" class="form-control" name="#" value="{{$correspondencia->destinatario}}" disabled>
            </div>
            <div class="form-group col s3">
              <label>Entidad Destinatario</label>
              <input type="text" class="form-control" name="#" value="{{$correspondencia->entidadeDestinatario->entidad}}" disabled>
            </div>
          </div>
          <div class="row">
            <div class="form-group col s3 {{ $errors->has('destinatario') ? 'has-error' : '' }}">
              <label>Destinatario</label>
              <input type="text" class="form-control" id="destinatario" name="destinatario">
              {!!$errors->first('destinatario', '<span class="help-block"><div class="alert alert-danger" role="alert" style="padding: 0px;">:message</div></span>')!!}
            </div>
            <div class="form-group col s3">
              <label>Entidad del Destinatario</label>
              <select id="entidadeDestinatario_id" name="entidadeDestinatario_id" class="form-control selectpicker show-menu-arrow" data-live-search="true" title="-- Seleccione Codigo --">
                @foreach($entidades as $entidade)
                  <option value="{{$entidade->id}}">{{$entidade->entidad}}</option>
                @endforeach
              </select>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="form-group col">
          <label>Detalles</label>
          <textarea type="textarea" class="form-control" name="detalles" style="resize: none;">{{$correspondencia->detalles}}</textarea>
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
