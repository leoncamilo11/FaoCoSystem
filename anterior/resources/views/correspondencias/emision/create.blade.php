@extends("../layouts.plantilla")

@section("main")
  <div class="mx-auto" style="text-align:center; width:650px; padding:15px;">
    <div class="card">
      <div class="card-header">
        <h2>Insertar Emisiones de Correspondencia</h2>
      </div>
      <div class="card-body">
        <p class="card-text">¿Que tipo de emision desea realizar?</p>
      </div>
      <div class="card-footer">
        <div class="row">
          <div class="col s4">
            <button id="display_emisionInterna" class="btn btn-outline-primary btn-sm btn-block">Interna</button>
          </div>
          <div class="col s4">
            <button id="display_emisionExterna" class="btn btn-outline-primary btn-sm btn-block">Externa</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <hr>
  <div class="mx-auto" style="width:1200px;" id="div_opciones">
    <div id="emisionInterna" style="display:none;">
      <h2>Espacio para el registro de emisiones internas</h2>
      <form method="post" action="/correspondencias/emision/createEmision2">
        <div class="row">
          <div class="form-group col s3 {{ $errors->has('numeroGuia') ? 'has-error' : '' }}">
            <label>Numero de Guia</label>
            <input type="text" class="form-control" name="numeroGuia" placeholder="# Guia Envio">
            {!!$errors->first('numeroGuia', '<span class="help-block"><div class="alert alert-danger" role="alert" style="padding: 0px;">:message</div></span>')!!}
          </div>
          <div class="form-group col s3 {{ $errors->has('empresaEnvio') ? 'has-error' : '' }}">
            <label>Empresa de Envio</label>
            <input type="text" class="form-control" name="empresaEnvio" placeholder="FAO" disabled>
            {!!$errors->first('empresaEnvio', '<span class="help-block"><div class="alert alert-danger" role="alert" style="padding: 0px;">:message</div></span>')!!}
          </div>
          <div class="form-group col s3">
            <label>Estado Envio</label>
            <select name="estado_id" class="form-control">
              @foreach($estados as $estado)
                <option value="{{$estado->id}}">{{$estado->estado}}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group col s3">
            <label>Fecha Envio</label>
            <input type="datetime-local" class="form-control" name="fecha_id" >
          </div>
        </div>
        <div class="row">
          <div class="form-group col-sm-6">
            <label>Detalles del Envio</label>
            <textarea type="textarea" class="form-control" name="detalle" style="resize: none;"></textarea>
          </div>
          <div class="form-group col-sm-3">
            <label>Tipo de Emision</label>
            <input type="hidden" name="emision" value="1">
            <input type="text" class="form-control" value="Interna" disabled>
          </div>
          <div class="form-group col-sm-3">
            <label>Recepcionista que registra</label>
            <select name="emitidoPor_Id" class="form-control">
              @foreach($recepcionistas as $recepcionista)
                <option value="{{$recepcionista->id}}">{{$recepcionista->name}} {{$recepcionista->apellido}}</option>
              @endforeach
            </select>
          </div>
        </div>
        <div class="row">
          <div class="form-group col s3">
            <label>Usuario que Envia</label>
            <select name="usuarioEmite_id" class="form-control">
              @foreach($usuariosEnvia as $usuarioEnvia)
                <option value="{{$usuarioEnvia->id}}">{{$usuarioEnvia->name}} {{$usuarioEnvia->apellido}}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group col s3">
            <label>Area</label>
            <select name="area_id" class="form-control">
              @foreach($areas as $area)
                <option value="{{$area->id}}">{{$area->area}}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group col s3">
            <label>Sede</label>
            <select name="sede_id" class="form-control">
              @foreach($sedes as $sede)
                <option value="{{$sede->id}}">{{$sede->sede}}</option>
              @endforeach
            </select>
          </div>
        </div>
        {{csrf_field()}}
        <button type="submit" class="btn btn-primary" name="enviar">Enviar</button>
      </form>
    </div>

    <div id="emisionExterna" style="display:none;">
      <h2>Espacio para el registro de emisiones externas</h2>
      <form method="post" action="/correspondencias">
        <div class="row">
          <div class="form-group col s3 {{ $errors->has('numeroGuia') ? 'has-error' : '' }}">
            <label>Numero de Guia</label>
            <input type="text" class="form-control" name="numeroGuia" placeholder="# Guia Envio">
            {!!$errors->first('numeroGuia', '<span class="help-block"><div class="alert alert-danger" role="alert" style="padding: 0px;">:message</div></span>')!!}
          </div>
          <div class="form-group col s3 {{ $errors->has('empresaEnvio') ? 'has-error' : '' }}">
            <label>Empresa de Envio</label>
            <input type="text" class="form-control" name="empresaEnvio" placeholder="Empresa Envio">
            {!!$errors->first('empresaEnvio', '<span class="help-block"><div class="alert alert-danger" role="alert" style="padding: 0px;">:message</div></span>')!!}
          </div>
          <div class="form-group col s3">
            <label>Estado Envio</label>
            <select name="estado_id" class="form-control">
              @foreach($estados as $estado)
                <option value="{{$estado->id}}">{{$estado->estado}}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group col s3">
            <label>Fecha Envio</label>
            <input type="datetime-local" class="form-control" name="fecha_id" >
          </div>
        </div>
        <div class="row">
          <div class="form-group col-sm-6">
            <label>Detalles del Envio</label>
            <textarea type="textarea" class="form-control" name="detalle" style="resize: none;"></textarea>
          </div>
          <div class="form-group col-sm-3">
            <label>Tipo de Emision</label>
            <input type="hidden" name="emision" value="2">
            <input type="text" class="form-control" value="Externa" disabled>
          </div>
          <div class="form-group col-sm-3">
            <label>Recepcionista que registra</label>
            <select name="emitidoPor_Id" class="form-control">
              @foreach($recepcionistas as $recepcionista)
                <option value="{{$recepcionista->id}}">{{$recepcionista->name}} {{$recepcionista->apellido}}</option>
              @endforeach
            </select>
          </div>
        </div>
        <div class="row">
          <div class="form-group col s3">
            <label>Usuario que Envia</label>
            <select name="usuarioEmite_id" class="form-control">
              @foreach($usuariosEnvia as $usuarioEnvia)
                <option value="{{$usuarioEnvia->id}}">{{$usuarioEnvia->name}} {{$usuarioEnvia->apellido}}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group col s3">
            <label>Area</label>
            <select name="area_id" class="form-control">
              @foreach($areas as $area)
                <option value="{{$area->id}}">{{$area->area}}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group col s3">
            <label>Sede</label>
            <select name="sede_id" class="form-control">
              @foreach($sedes as $sede)
                <option value="{{$sede->id}}">{{$sede->sede}}</option>
              @endforeach
            </select>
          </div>
        </div>
        {{csrf_field()}}
        <button type="submit" class="btn btn-primary" name="enviar">Enviar</button>
      </form>
    </div>
  </div>
  <!--@if(count($errors)>0)
    @foreach($errors->all() as $error)
      <li>{{$error}}</li>
    @endforeach
  @endif-->
@endsection
