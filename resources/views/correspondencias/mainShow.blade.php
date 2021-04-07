@extends("../layouts.plantilla")

@section("cabecera")
  Leer Proyectos
@endsection

@section("contenido")
<table class="table">
<thead>
  <tr>
    <th scope="col">#</th>
    <th scope="col">Codigo</th>
    <th scope="col">Nombre</th>
    <th scope="col">Detalles</th>
  </tr>
</thead>
<tbody>
  <tr>
    <th scope="row">{{$usuario->id}}</th>
    <td>{{$usuario->name}}</td>
    <td>{{$usuario->apellido}}</td>
    <td>{{$usuario->tipoDocumento->codigo}}</td>
    <td>{{$usuario->documento}}</td>
    <td>{{$usuario->email}}</td>
    <td>{{$usuario->role->role}}</td>
    <td>{{$usuario->telefono}}</td>
    <td>{{$usuario->entidade->entidade}}</td>
    <td>{{$usuario->area->area}}</td>
    <td>{{$usuario->created_at}}</td>
    <td>{{$usuario->updated_at}}</td>
  </tr>
</tbody>
</table>
@endsection

@section("pie")

@endsection
