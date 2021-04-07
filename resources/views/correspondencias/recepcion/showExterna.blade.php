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
    <th scope="row">{{$proyecto->id}}</th>
    <td>{{$proyecto->codigo}}</td>
    <td>{{$proyecto->nombre}}</td>
    <td>{{$proyecto->detalle}}</td>
  </tr>
</tbody>
</table>
@endsection

@section("pie")

@endsection
