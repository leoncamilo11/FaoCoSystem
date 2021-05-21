@extends("../layouts.plantilla")

@section("main")
  <div class="mx-auto" style="text-align:center;">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h2 class="panel-title">Insertar Usuarios</h2>
      </div>
      <div class="panel-body">
        <p class="card-text">Ingrese el usuario que desea ingresar</p>
      </div>
    </div>
  </div>
  <hr>
  <div class="mx-auto" style="width:1200px;">
    <form method="post" action="/usuarios">
      <div class="row">
        <div class="form-group col s3 {{ $errors->has('nombre') ? 'has-error' : '' }}">
          <label>Nombres</label>
          <input type="text" class="form-control" name="nombre" placeholder="Nombres">
          {!!$errors->first('nombre', '<span class="help-block"><div class="alert alert-danger" role="alert" style="padding: 0px;">:message</div></span>')!!}
        </div>
        <div class="form-group col s3 {{ $errors->has('apellido') ? 'has-error' : '' }}">
          <label>Apellidos</label>
          <input type="text" class="form-control" name="apellido" placeholder="Apellidos">
          {!!$errors->first('apellido', '<span class="help-block"><div class="alert alert-danger" role="alert" style="padding: 0px;">:message</div></span>')!!}
        </div>
        <div class="form-group col s3 {{ $errors->has('index') ? 'has-error' : '' }}">
          <label>Index</label>
          <input type="text" class="form-control" name="index" placeholder="Index">
          {!!$errors->first('index', '<span class="help-block"><div class="alert alert-danger" role="alert" style="padding: 0px;">:message</div></span>')!!}
        </div>
        <div class="form-group col s3 {{ $errors->has('tipoDocumento_id') ? 'has-error' : '' }}">
          <label>Tipo Documento</label>
          <select name="tipoDocumento_id" class="form-control">
            <option value="" selected disabled>Seleccione Tipo Documento</option>
            @foreach($tipoDocumentos as $tipoDocumento)
              <option value="{{$tipoDocumento->id}}">{{$tipoDocumento->tipoDocumento}}</option>
            @endforeach
          </select>
          {!!$errors->first('tipoDocumento_id', '<span class="help-block"><div class="alert alert-danger" role="alert" style="padding: 0px;">:message</div></span>')!!}
        </div>
      </div>
      <div class="row">
        <div class="form-group col s3 {{ $errors->has('documento') ? 'has-error' : '' }}">
          <label>Documento</label>
          <input type="text" class="form-control" name="documento" placeholder="Documento">
          {!!$errors->first('documento', '<span class="help-block"><div class="alert alert-danger" role="alert" style="padding: 0px;">:message</div></span>')!!}
        </div>
        <div class="form-group col s3 {{ $errors->has('email') ? 'has-error' : '' }}">
          <label>Correo</label>
          <input type="email" class="form-control" name="email" placeholder="Correo">
          {!!$errors->first('email', '<span class="help-block"><div class="alert alert-danger" role="alert" style="padding: 0px;">:message</div></span>')!!}
        </div>
        <div class="form-group col s3 {{ $errors->has('email_verified_at') ? 'has-error' : '' }}">
          <label>Verificar Correo</label>
          <input type="email" class="form-control" name="email_verified_at" placeholder="Verificar Correo">
          {!!$errors->first('email_verified_at', '<span class="help-block"><div class="alert alert-danger" role="alert" style="padding: 0px;">:message</div></span>')!!}
        </div>
        <div class="form-group col s3 {{ $errors->has('password') ? 'has-error' : '' }}">
          <label>Contraseña</label>
          <input type="password" class="form-control" name="password">
          {!!$errors->first('password', '<span class="help-block"><div class="alert alert-danger" role="alert" style="padding: 0px;">:message</div></span>')!!}
        </div>
      </div>
      <div class="row">
        <div class="form-group col s3 {{ $errors->has('role_id') ? 'has-error' : '' }}">
          <label>Rol</label>
          <select name="role_id[]" class="form-control" multiple required>
            <option value="" selected disabled>Seleccione Rol</option>
            @foreach($roles as $role)
              <option value="{{$role->id}}">{{$role->role}}</option>
            @endforeach
          </select>
          {!!$errors->first('role_id', '<span class="help-block"><div class="alert alert-danger" role="alert" style="padding: 0px;">:message</div></span>')!!}
        </div>
        <div class="form-group col s3 {{ $errors->has('telefono') ? 'has-error' : '' }}">
          <label>Teléfono</label>
          <input type="text" class="form-control" name="telefono" placeholder="Teléfono contacto">
          {!!$errors->first('telefono', '<span class="help-block"><div class="alert alert-danger" role="alert" style="padding: 0px;">:message</div></span>')!!}
        </div>
        <div class="form-group col s3 {{ $errors->has('entidad_id') ? 'has-error' : '' }}">
          <label>Entidad Contrato</label>
          <select name="entidad_id" class="form-control">
            <option value="" selected disabled>Seleccione Entidad</option>
            @foreach($entidades as $entidade)
              <option value="{{$entidade->id}}">{{$entidade->entidad}}</option>
            @endforeach
          </select>
          {!!$errors->first('entidad_id', '<span class="help-block"><div class="alert alert-danger" role="alert" style="padding: 0px;">:message</div></span>')!!}
        </div>
        <div class="form-group col s3"></div>
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
