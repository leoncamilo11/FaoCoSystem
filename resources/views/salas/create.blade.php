@extends("../layouts.plantilla")

@section("main")
  <div class="mx-auto" style="text-align:center;">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h2 class="panel-title">Insertar Salas</h2>
      </div>
      <div class="panel-body">
        <p class="card-text">Ingrese la sala que desea registrar</p>
      </div>
    </div>
  </div>
  <hr>
  <div class="mx-auto" style="width:400px;">
    <form method="post" action="/salas">
      <div class="form-group {{ $errors->has('codigo') ? 'has-error' : '' }}">
        <label>Nombre de la Sala</label>
        <input type="text" class="form-control" name="Nombre Salas" placeholder="Codigo">
        {!!$errors->first('codigo', '<span class="help-block"><div class="alert alert-danger" role="alert" style="padding: 0px;">:message</div></span>')!!}
      </div>
      <div class="form-group">
        <label>Detalles de la Sala</label>
        <textarea type="textarea" class="form-control" name="detalle" style="resize: none;"></textarea>
      </div>
      <div class="form-group">
        <label>Capacidad de la Sala</label>
        <input type="text" class="form-control" name="codigo" placeholder="Numerico">
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
