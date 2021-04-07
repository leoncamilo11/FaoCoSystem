@extends("../layouts.plantilla")

@section("main")
  <div class="mx-auto" style="text-align:center;">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h2 class="panel-title">Insertar Emisiones Internas de Correspondencia</h2>
      </div>
      <div class="panel-body">
        <p class="card-text">Ingrese la informacion de la emision que desea realizar</p>
      </div>
    </div>
  </div>
  <hr>
  <!--@if(count($errors)>0)
    @foreach($errors->all() as $error)
      <li>{{$error}}</li>
    @endforeach
  @endif-->
@endsection
