@extends("../layouts.plantilla")

@section("main")
  <div class="mx-auto" style="text-align:center;">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h2 class="panel-title">Leer Usuarios</h2>
      </div>
      <div class="panel-body">
        <p class="card-text">Lista de usuarios que se encuentra activos dentro de la base de datos.</p>
      </div>
    </div>
  </div>
  <hr>
  <div class="table-responsive">
    <table class="table table-bordered table-striped table-sm">
    <thead>
      <tr>
        <th scope="col">No.</th>
        <th scope="col">Nombres</th>
        <th scope="col">Apellidos</th>
        <th scope="col">Tipo Documento</th>
        <th scope="col">Documento</th>
        <th scope="col">Correo</th>
        <!--Traer Roles-->
        <th scope="col">Roles</th>
        <th scope="col">Telefono</th>
        <!--Traer Entidad-->
        <th scope="col">Info Entidad</th>
        <th scope="col">Creado</th>
        <th scope="col">Actualizado</th>
        <th scope="col">Editar</th>
        <th scope="col">Borrar</th>
      </tr>
    </thead>
    <tbody>
      @if ($usuarios)
        @foreach($usuarios as $usuario)
          <tr>
            <th scope="row">{{$usuario->id}}</th>
            <td>{{$usuario->nombre}}</td>
            <td>{{$usuario->apellido}}</td>
            <td>{{$usuario->tipoDocumento->codigo}}</td>
            <td>{{$usuario->documento}}</td>
            <td>{{$usuario->email}}</td>
            <td>
              <!-- Botón en HTML (lanza el modal en Bootstrap) -->
              <a href="#ModalRolesUsuario" role="button" class="btn btn-large btn-primary" data-toggle="modal">Ver Roles</a>

              <!-- Modal / Ventana / Overlay en HTML -->
              <div id="ModalRolesUsuario" class="modal fade">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h4 class="modal-title">Roles del usuario {{$usuario->nombre}}{{$usuario->apellido}}</h4>
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                      <ul>
                        <li>Rol</li>
                        <li>Rol</li>
                        <li>Rol</li>
                      </ul>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                    </div>
                  </div>
                </div>
              </div>
            </td>
            <!--Traer Roles-->
            <td>{{$usuario->telefono}}</td>
            <!--Traer Entidad-->
            <td>
              <!-- Botón en HTML (lanza el modal en Bootstrap) -->
              <a href="#ModalEntidadUsuario" role="button" class="btn btn-large btn-primary" data-toggle="modal">Info Entidad</a>

              <!-- Modal / Ventana / Overlay en HTML -->
              <div id="ModalEntidadUsuario" class="modal fade">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h4 class="modal-title">Entidad registrada con el usuario {{$usuario->nombre}}{{$usuario->apellido}}</h4>
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                      <ul>
                        <li>Entidad: </li>
                        <li>Direccion: </li>
                        <li>Detalles: </li>
                      </ul>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                    </div>
                  </div>
                </div>
              </div>
            </td>
            <td>{{$usuario->created_at}}</td>
            <td>{{$usuario->updated_at}}</td>
            <form action="/usuarios/{{$usuario->id}}/edit" method="put">
              {{csrf_field()}}
              <input type="hidden" name="_method" value="EDIT">
              <td><button type="submit" class="btn btn-success btn-sm" name="editar">Editar</button></td>
            </form>
            <form action="/usuarios/{{$usuario->id}}" method="post">
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
