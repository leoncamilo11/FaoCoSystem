@extends("../layouts.plantilla")

@section("main")
  <div class="mx-auto" style="text-align:center;">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h2 class="panel-title">Editar Usuarios</h2>
      </div>
      <div class="panel-body">
        <p class="card-text">Edite los camopos del usuario que desea cambiar</p>
      </div>
    </div>
  </div>
  <hr>
  <div class="mx-auto" style="width:1200px;">
    <form method="post" action="/usuarios/{{$usuario->id}}">
      <div class="row">
        <div class="form-group col s3 {{ $errors->has('name') ? 'has-error' : '' }}">
          <label>Nombres</label>
          <input type="text" class="form-control" name="nombre" placeholder="Nombres" value="{{$usuario->nombre}}" disabled>
          {!!$errors->first('nombre', '<span class="help-block"><div class="alert alert-danger" role="alert" style="padding: 0px;">:message</div></span>')!!}
        </div>
        <div class="form-group col s3 {{ $errors->has('apellido') ? 'has-error' : '' }}">
          <label>Apellidos</label>
          <input type="text" class="form-control" name="apellido" placeholder="Apellidos" value="{{$usuario->apellido}}" disabled>
          {!!$errors->first('apellido', '<span class="help-block"><div class="alert alert-danger" role="alert" style="padding: 0px;">:message</div></span>')!!}
        </div>
        <div class="form-group col s3">
          <label>Index</label>
          <input type="text" class="form-control" value="{{$usuario->index}}" disabled>
        </div>
        <div class="form-group col s3">
          <div class="row">
            <!--<div class="col">
              <label>Tipo Documento</label>
              <select name="tipoDocumento_id" class="form-control">
                @foreach($tipoDocumentos as $tipoDocumento)
                  <option name="tipoDocumento" value="{{$tipoDocumento->id}}">{{$tipoDocumento->tipoDocumento}}</option>
                @endforeach
              </select>
            </div>-->
            <div class="col">
              <label>Tipo Doc Actual</label>
              <input type="text" class="form-control" value="{{$usuario->tipoDocumento->tipoDocumento}}" disabled>
            </div>
          </div>
        </div>
        <div class="form-group col s3 {{ $errors->has('documento') ? 'has-error' : '' }}">
          <label>Documento</label>
          <input type="text" class="form-control" name="documento" placeholder="Documento" value="{{$usuario->documento}}" disabled>
          {!!$errors->first('documento', '<span class="help-block"><div class="alert alert-danger" role="alert" style="padding: 0px;">:message</div></span>')!!}
        </div>
      </div>
      <div class="row">
        <div class="form-group col s3 {{ $errors->has('email') ? 'has-error' : '' }}">
          <label>Correo</label>
          <input type="email" class="form-control" name="email" placeholder="Correo" value="{{$usuario->email}}">
          {!!$errors->first('email', '<span class="help-block"><div class="alert alert-danger" role="alert" style="padding: 0px;">:message</div></span>')!!}
        </div>
        <div class="form-group col s3 {{ $errors->has('email_verified_at') ? 'has-error' : '' }}">
          <label>Verificar Correo</label>
          <input type="email" class="form-control" name="email_verified_at" placeholder="Verificar Correo" value="{{$usuario->email}}">
          {!!$errors->first('email_verified_at', '<span class="help-block"><div class="alert alert-danger" role="alert" style="padding: 0px;">:message</div></span>')!!}
        </div>
        @if (empty($usuario->password))
        <div class="form-group col s3 {{ $errors->has('password') ? 'has-error' : '' }}">
          <label>Contraseña</label>
          <input type="password" class="form-control" name="password">
          {!!$errors->first('password', '<span class="help-block"><div class="alert alert-danger" role="alert" style="padding: 0px;">:message</div></span>')!!}
        </div>
        @endif
        <div class="form-group col s3">
          <div class="row">
            <div class="col">
              <label>Roles Actuales</label>
              <!-- Botón en HTML (lanza el modal en Bootstrap)-->
              <a href="#ModalRolesUsuario" role="button" class="btn btn-large btn-primary" data-toggle="modal">Ver Roles</a>
              <!--Modal / Ventana / Overlay en HTML-->
              <div id="ModalRolesUsuario" class="modal fade">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h4 class="modal-title">Roles del usuario {{$usuario->nombre}} {{$usuario->apellido}}</h4>
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                      <ul>
                        @foreach ($usuario->roles as $role)
                          <li>{{$role->role}}</li>
                        @endforeach
                      </ul>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col">
              <label>Actualizar Roles</label>
              <select name="role_id[]" class="form-control" multiple required>
                <option value="" selected disabled>Seleccione Rol</option>
                @foreach($roles as $role)
                  <option value="{{$role->id}}">{{$role->role}}</option>
                @endforeach
              </select>
              {!!$errors->first('role_id', '<span class="help-block"><div class="alert alert-danger" role="alert" style="padding: 0px;">:message</div></span>')!!}
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="form-group col s3 {{ $errors->has('telefono') ? 'has-error' : '' }}">
          <label>Teléfono</label>
          <input type="text" class="form-control" name="telefono" placeholder="Teléfono contacto" value="{{$usuario->telefono}}">
          {!!$errors->first('telefono', '<span class="help-block"><div class="alert alert-danger" role="alert" style="padding: 0px;">:message</div></span>')!!}
        </div>
        <div class="form-group col s3">
          <div class="row">
            <div class="col">
              <label>Entidad Contrato</label>
              <select name="entidade_id" class="form-control">
                @foreach($entidades as $entidade)
                  <option value="{{$entidade->id}}">{{$entidade->entidad}}</option>
                @endforeach
              </select>
            </div>
            <div class="col">
              <label>Entidad Actual</label>
              @if ($usuario->entidade)
                <input type="text" class="form-control" value="{{$usuario->entidade->entidad}}" disabled>
              @else
                <input type="text" class="form-control" value="Sin Info" disabled>
              @endif
            </div>
          </div>
        </div>
        <div class="form-group col s3"></div>
      </div>
      <div class="row">
        <div class="form-group col s3"></div>
        <div class="form-group col s3"></div>
      </div>
      {{csrf_field()}}
      <input type="hidden" name="_method" value="PUT">
      <button type="submit" class="btn btn-primary" name="enviar">Enviar</button>
    </form>
  </div>
@endsection
