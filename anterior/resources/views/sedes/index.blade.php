@extends("../layouts.plantilla")

@section("main")
  <div class="mx-auto" style="text-align:center;">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h2 class="panel-title">Leer Proyectos</h2>
      </div>
      <div class="panel-body">
        <p class="card-text">Lista de proyectos que se encuentra activos dentro de la base de datos.</p>
      </div>
    </div>
  </div>
  <hr>
  <div class="table-responsive">
    <table class="table table-bordered table-striped table-sm">
    <thead>
      <tr>
        <th scope="col">No.</th>
        <th scope="col">Codigo</th>
        <th scope="col">Nombre</th>
        <th scope="col">Detalles</th>
        <th scope="col">Creado</th>
        <th scope="col">Actualizado</th>
        @if (Auth::user()->role_id == 1 || Auth::user()->role_id == 15)
          <th scope="col">Editar</th>
        @endif
        @if (Auth::user()->role_id == 1)
          <th scope="col">Borrar</th>
        @endif
      </tr>
    </thead>
    <tbody>
      @if ($proyectos)
        @foreach($proyectos as $proyecto)
          <tr>
            <th scope="row">{{$proyecto->id}}</th>
            <td>{{$proyecto->codigo}}</td>
            <td>{{$proyecto->nombre}}</td>
            <td>{{$proyecto->detalle}}</td>
            <td>{{$proyecto->created_at}}</td>
            <td>{{$proyecto->updated_at}}</td>
            @if (Auth::user()->role_id == 1 || Auth::user()->role_id == 15)
              <form action="/proyectos/{{$proyecto->id}}/edit" method="put">
                {{csrf_field()}}
                <input type="hidden" name="_method" value="EDIT">
                <td><button type="submit" class="btn btn-success btn-sm" name="editar">Editar</button></td>
              </form>
            @endif
            @if (Auth::user()->role_id == 1)
              <form action="/proyectos/{{$proyecto->id}}" method="post">
                {{csrf_field()}}
                <input type="hidden" name="_method" value="DELETE">
                <td><button type="submit" class="btn btn-danger btn-sm" name="borrar">Borrar</button></td>
              </form>
            @endif
          </tr>
        @endforeach
      @endif
    </tbody>
    </table>
  </div>
@endsection
