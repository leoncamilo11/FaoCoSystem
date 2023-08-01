@extends("../layouts.plantilla")

@section("main")
  <div class="mx-auto" style="text-align:center; width:500px; padding:15px;">
    <div class="card">
      <div class="card-header">
        <h2>Registro Correspondencia</h2>
      </div>
      <div class="card-body">
        <p class="card-text">Seleccione el tipo de registro que desee realizar.</p>
      </div>
      <div class="card-footer">
        <div class="row">
          <div class="col s4">
            <a href="{{url('/correspondencias/emision/create')}}" class="btn btn-outline-primary btn-sm btn-block">Emisión</a>
          </div>
          <div class="col s4">
            <a href="{{url('/correspondencias/recepcion/create')}}" class="btn btn-outline-primary btn-sm btn-block">Recepción</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <hr>
@endsection
