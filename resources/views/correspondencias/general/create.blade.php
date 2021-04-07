@extends("../layouts.plantilla")

@section("main")
  <div class="mx-auto" style="text-align:center;">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h2 class="panel-title">Insertar Correspondencia General</h2>
      </div>
      <div class="panel-body">
        <p class="card-text">Ingrese el item que desea registrar</p>
      </div>
    </div>
  </div>
  <hr>
  <div class="mx-auto" style="width:1200px;">
    <form name="formRegistroCorrespondencia" method="post" action="/correspondencias/general">
      <div class="row">
        <div class="form-group col s3">
          <label>Consecutivo</label><br>
          <input type="text" class="form-control" name="consecutivo" value="{{$consecutivo}}">
        </div>
        <div class="form-group col s3"></div>
        <div class="form-group col s3">
          <label>Fecha Registro</label>
          <input type="datetime" class="form-control" name="fechaR_id" value="{{$hoy}}" disabled>
        </div>
      </div>
      <div class="row">
        <div class="form-group col s3 {{ $errors->has('recepcionista_id') ? 'has-error' : '' }}">
          <label>Recepcionista que registra</label>
          <select name="recepcionista_id" class="form-control">
            <option value="" selected disabled>Seleccione Recepcionista</option>
            @foreach($recepcionistas as $recepcionista)
              <option value="{{$recepcionista->id}}">{{$recepcionista->nombre}} {{$recepcionista->apellido}}</option>
            @endforeach
          </select>
          {!!$errors->first('recepcionista_id', '<span class="help-block"><div class="alert alert-danger" role="alert" style="padding: 0px;">:message</div></span>')!!}
        </div>
        <div class="form-group col s3 {{ $errors->has('numeroGuia') ? 'has-error' : '' }}">
          <label># Guia</label>
          <input type="text" class="form-control" name="numeroGuia" placeholder=" Numero Guia">
          {!!$errors->first('numeroGuia', '<span class="help-block"><div class="alert alert-danger" role="alert" style="padding: 0px;">:message</div></span>')!!}
        </div>
        <div class="form-group col s3 {{ $errors->has('tipoRemitente') ? 'has-error' : '' }}">
          <label>Tipo Remitente</label>
            <select class="form-control" name="tipoRemitente" onChange="mostrarRemitente(this.value);">
              <option value="" selected disabled>Seleccione Tipo Remitente</option>
              <option value="1">Externo</option>
              <option value="2">Consultor</option>
              <option value="3">Proveedor</option>
          </select>
          {!!$errors->first('tipoRemitente', '<span class="help-block"><div class="alert alert-danger" role="alert" style="padding: 0px;">:message</div></span>')!!}
        </div>
          <div id="remitenteExterno" style="display:none;">
            <div class="form-group col s3 {{ $errors->has('remitente') ? 'has-error' : '' }}">
              <label>Remitente</label>
              <input type="text" class="form-control" name="remitenteE" placeholder="Remitente">
              {!!$errors->first('remitente', '<span class="help-block"><div class="alert alert-danger" role="alert" style="padding: 0px;">:message</div></span>')!!}
            </div>
          </div>
          <div id="remitenteConsultor" style="display:none;">
            <div class="form-group col s3 {{ $errors->has('remitente') ? 'has-error' : '' }}">
              <label>Remitente</label>
              <select name="remitenteC_id" class="form-control">
                <option value="" selected disabled>Seleccione Remitente</option>
                @foreach($remitentesConsultor as $remitenteConsultor)
                  <option value="{{$remitenteConsultor->id}}">{{$remitenteConsultor->nombre}} {{$remitenteConsultor->apellido}}</option>
                @endforeach
              </select>
              {!!$errors->first('remitente', '<span class="help-block"><div class="alert alert-danger" role="alert" style="padding: 0px;">:message</div></span>')!!}
            </div>
          </div>
          <div id="remitenteProveedor" style="display:none;">
            <div class="form-group col s3 {{ $errors->has('remitente') ? 'has-error' : '' }}">
              <label>Remitente</label>
              <select name="remitenteP_id" class="form-control">
                <option value="" selected disabled>Seleccione Remitente</option>
                @foreach($remitentesProveedor as $remitenteProveedor)
                  <option value="{{$remitenteProveedor->id}}">{{$remitenteProveedor->nombre}}</option>
                @endforeach
              </select>
              {!!$errors->first('remitente', '<span class="help-block"><div class="alert alert-danger" role="alert" style="padding: 0px;">:message</div></span>')!!}
            </div>
          </div>
      </div>
      <div class="row">
        <div class="form-group col s3 {{ $errors->has('paisE_id') ? 'has-error' : '' }}">
          <label>Pais Envia</label>
          <select id="paisE_id" name="paisE_id" class="form-control">
            <option value="" selected disabled>Seleccione Pais</option>
            @foreach($paises as $pais)
              <option value="{{$pais->id}}">{{$pais->codigo}} {{$pais->nombre}}</option>
            @endforeach
          </select>
          {!!$errors->first('paisE_id', '<span class="help-block"><div class="alert alert-danger" role="alert" style="padding: 0px;">:message</div></span>')!!}
        </div>
        <div class="form-group col s3">
          <label>Ciudad Envia</label>
          <select id="ciudadE_id" name="ciudadE_id" class="form-control"></select>
        </div>
        <div class="form-group col s3">
          <label>Pais Recibe</label>
          <select id="paisR_id" name="paisR_id" class="form-control">
            <option value="" selected disabled>Seleccione Pais</option>
            @foreach($paises as $pais)
              <option value="{{$pais->id}}">{{$pais->codigo}} {{$pais->nombre}}</option>
            @endforeach
          </select>
        </div>
        <div class="form-group col s3">
          <label>Ciudad Recibe</label>
          <select id="ciudadR_id" name="ciudadR_id" class="form-control"></select>
        </div>
      </div>
      <div class="row">
        <div class="form-group col s3 {{ $errors->has('estado_id') ? 'has-error' : '' }}">
          <label>Estado Envio</label>
          <select name="estado_id" class="form-control">
            <option value="" selected disabled>Seleccione Estado</option>
            @foreach($estados as $estado)
              <option value="{{$estado->id}}">{{$estado->estado}}</option>
            @endforeach
          </select>
          {!!$errors->first('estado_id', '<span class="help-block"><div class="alert alert-danger" role="alert" style="padding: 0px;">:message</div></span>')!!}
        </div>
        <div class="form-group col s3 {{ $errors->has('usuarioRecibe_id') ? 'has-error' : '' }}">
          <label>Usuario que Recibe</label>
          <select name="usuarioRecibe_id" class="form-control">
            <option value="" selected disabled>Seleccione Usario que Recibe</option>
            @foreach($usuariosRecibe as $usuarioRecibe)
              <option value="{{$usuarioRecibe->id}}">{{$usuarioRecibe->nombre}} {{$usuarioRecibe->apellido}}</option>
            @endforeach
          </select>
          {!!$errors->first('usuarioRecibe_id', '<span class="help-block"><div class="alert alert-danger" role="alert" style="padding: 0px;">:message</div></span>')!!}
        </div>
        <div class="form-group col-sm-5">
          <label>Detalles</label>
          <textarea type="textarea" class="form-control" name="detalle" style="resize: none;"></textarea>
        </div>
      </div>
      <div class="row">
        <div class="form-group col s3"></div>
        <div class="form-group col s3"></div>
      </div>
      {{csrf_field()}}
      <button type="submit" class="btn btn-primary" name="enviar">Enviar</button>
    </form>
  </div>
  <!--@if(count($errors)>0)
    @foreach($errors->all() as $error)
      <li>{{$error}}</li>
    @endforeach
  @endif-->
@endsection
