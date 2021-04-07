@extends("../layouts.plantilla")

@section("main")
  <div class="mx-auto" style="text-align:center;">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h2 class="panel-title">Editar Proyectos</h2>
      </div>
      <div class="panel-body">
        <p class="card-text">Edite los camopos del proyecto que desea cambiar</p>
      </div>
    </div>
  </div>
  <hr>
  <div class="mx-auto" style="width:400px;">
    <form method="post" action="/proyectos/{{$proyecto->id}}">
      <div class="form-group {{ $errors->has('codigo') ? 'has-error' : '' }}">
        <label>Codigo del Proyecto</label>
        <input type="text" class="form-control" name="codigo" value="{{$proyecto->codigo}}">
        {!!$errors->first('codigo', '<span class="help-block"><div class="alert alert-danger" role="alert" style="padding: 0px;">:message</div></span>')!!}
      </div>
      <div class="form-group {{ $errors->has('nombre') ? 'has-error' : '' }}">
        <label>Nombre del Proyecto</label>
        <input type="text" class="form-control" name="nombre" value="{{$proyecto->nombre}}">
        {!!$errors->first('nombre', '<span class="help-block"><div class="alert alert-danger" role="alert" style="padding: 0px;">:message</div></span>')!!}
      </div>
      <div class="form-group">
        <label>Detalles del Proyecto</label>
        <textarea type="text" class="form-control" name="detalle">{{$proyecto->detalle}}</textarea>
      </div>
      {{csrf_field()}}
      <input type="hidden" name="_method" value="PUT">
      <button type="submit" class="btn btn-primary" name="enviar">Enviar</button>
    </form>
  </div>
@endsection
