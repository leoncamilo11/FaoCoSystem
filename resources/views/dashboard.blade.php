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
          <p class="card-text">Sistema de gestión que permite el proceso de correspondencia y salas para la organización de las naciones unidas FAO</p>
          {{session()->get("rol_nombre")}}
        </div>
      </div>
    </div>
  </div>
@endsection
