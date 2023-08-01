@extends("../layouts.plantilla")

@section("main")
  <div class="mx-auto" style="text-align:center;">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h2 class="panel-title">Insertar Sedes</h2>
      </div>
      <div class="panel-body">
        <p class="card-text">Ingrese la sede que desea registrar</p>
      </div>
    </div>
  </div>
  <hr>
  <div class="mx-auto" style="width:400px;">
    <form method="post" action="/sedes">
      <div class="form-group {{ $errors->has('sede') ? 'has-error' : '' }}">
        <label>Nombre de la Sede</label>
        <input type="text" class="form-control" name="sede" placeholder="Nombre Identificativo de la Sede">
        {!!$errors->first('sede', '<span class="help-block"><div class="alert alert-danger" role="alert" style="padding: 0px;">:message</div></span>')!!}
      </div>
      <div class="form-group {{ $errors->has('nombre') ? 'has-error' : '' }}">
        <label>Nombre del Proyecto</label>
        <input type="text" class="form-control" name="nombre" placeholder="Nombre">
        {!!$errors->first('nombre', '<span class="help-block"><div class="alert alert-danger" role="alert" style="padding: 0px;">:message</div></span>')!!}
      </div>
      <div class="row">
        <div class="form-group col s6">
          <label>Pais</label>
          <select name="paise_id" class="form-control">
            @foreach($paises as $paise)
              <option value="{{$paise->id}}">{{$paise->paise}}</option>
            @endforeach
          </select>
        </div>
        <div class="form-group col s6">
          <label>Ciudad</label>
          <select name="ciudade_id" class="form-control">
            <!--@foreach($recepcionistas as $recepcionista)
              <option value="{{$recepcionista->id}}">{{$recepcionista->name}} {{$recepcionista->apellido}}</option>
            @endforeach-->
          </select>
        </div>
      </div>
      <div class="form-group">
        <label>Detalles de la Sede</label>
        <textarea type="text" class="form-control" name="detalles"></textarea>
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
