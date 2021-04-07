@extends("../layouts.plantilla")

@section("main")
  <div class="mx-auto" style="width: 500px;">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h2 class="panel-title">Bienvenido {{auth()->user()->nombre}} {{auth()->user()->apellido}}</h2>
      </div>
    </div>
  </div>
  <hr>
  <div class="mx-auto" style="width: 500px;">
    <div class="panel-body">
      <div class="card">
        <div class="card-header">
          <h4>Sistema de Gestion FAO Colombia</h4>
        </div>
        <div class="card-body">
          <p class="card-text">Sistema de gestión para procesos de correspondencia y salas para la organización de las naciones unidas para la alimentación y la agricultura</p>
        </div>
      </div>
    </div>
  </div>
@endsection
