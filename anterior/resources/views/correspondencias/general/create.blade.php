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
          <input type="text" class="form-control" id="consecutivo" name="consecutivo" value="{{$consecutivo}}" readonly>
        </div>
        <div class="form-group col s3"></div>
        <div class="form-group col s3">
          <label>Fecha Registro</label>
          <input type="datetime" class="form-control" name="fechaR_id" value="{{$hoy}}" disabled>
        </div>
      </div>
      <div class="row">
        <div class="form-group col s3">
          <label>Persona que registra</label>
          <input type="hidden" name="recepcionista_id" value="{{auth()->user()->id}}">
          <input type="text" class="form-control" name="" value="{{auth()->user()->nombre}} {{auth()->user()->apellido}}" disabled>
        </div>
        <div class="form-group col s3 {{ $errors->has('codigoArchivo_id') ? 'has-error' : '' }}">
          <label>Codigo de archivo</label>
          <select id="codigoArchivo_id" name="codigoArchivo_id" class="form-control">
            <option value="" selected disabled>Seleccione Codigo</option>
            @foreach($codigosArchivo as $codigoArchivo)
              <option value="{{$codigoArchivo->id}}">{{$codigoArchivo->codigoArchivo}}</option>
            @endforeach
            @foreach($proyectos as $proyecto)
              <option value="{{$proyecto->id}}">{{$proyecto->simbolo}}</option>
            @endforeach
          </select>
          {!!$errors->first('codigoArchivo_id', '<span class="help-block"><div class="alert alert-danger" role="alert" style="padding: 0px;">:message</div></span>')!!}
        </div>
        <div class="form-group col s3 {{ $errors->has('tipoCorrespondencia_id') ? 'has-error' : '' }}">
          <label>Tipo de Documento</label>
          <select name="tipoCorrespondencia_id" class="form-control">
            <option value="" selected disabled>Seleccione Tipo</option>
            @foreach($tiposCorrespondencia as $tipoCorrespondencia)
              <option value="{{$tipoCorrespondencia->id}}">{{$tipoCorrespondencia->tipoCorrespondencia}}</option>
            @endforeach
          </select>
          {!!$errors->first('tipoCorrespondencia_id', '<span class="help-block"><div class="alert alert-danger" role="alert" style="padding: 0px;">:message</div></span>')!!}
        </div>
      </div>
      <div class="row">
        <div class="col" style="background: #e4e4e4; border-radius: 10px;">
          <div class="row">
            <div class="form-group col s3 {{ $errors->has('usuarioSolicita_id') ? 'has-error' : '' }}">
              <label>Usuario que Solicita</label>
              <select id="usuarioSolicita_id" name="usuarioSolicita_id" class="form-control">
                <option value="" selected disabled>Seleccione Usario que Solicita</option>
                @foreach($usuariosSolicita as $usuarioSolicita)
                  <option value="{{$usuarioSolicita->id}}">{{$usuarioSolicita->nombre}} {{$usuarioSolicita->apellido}}</option>
                @endforeach
              </select>
              {!!$errors->first('usuarioSolicita_id', '<span class="help-block"><div class="alert alert-danger" role="alert" style="padding: 0px;">:message</div></span>')!!}
            </div>
            <div class="form-group col s3">
              <label>Entidad del Usuario</label>
              <input type="text" class="form-control" id="entidadSolicita" name="entidadSolicita" placeholder="-" disabled>
            </div>
          </div>
        </div>
        <div class="col-auto"></div>
        <div class="col" style="background: #e4e4e4; border-radius: 10px;">
          <div class="row">
            <div class="form-group col s3 {{ $errors->has('usuarioRecibe_id') ? 'has-error' : '' }}">
              <label>Usuario que Recibe</label>
              <select id="usuarioRecibe_id" name="usuarioRecibe_id" class="form-control">
                <option value="" selected disabled>Seleccione Usario que Recibe</option>
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
          <textarea type="textarea" class="form-control" name="detalle" style="resize: none;"></textarea>
        </div>
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
