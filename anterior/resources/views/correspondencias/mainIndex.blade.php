@extends("../layouts.plantilla")

@section("main")
  <div class="mx-auto" style="text-align:center; width:500px; padding:15px;">
    <div class="card">
      <div class="card-header">
        <h2>Consulta Correspondencia</h2>
      </div>
      <div class="card-body">
        <p class="card-text">Seleccione el tipo de consulta que desee realizar.</p>
      </div>
      <div class="card-footer">
        <div class="row">
          <div class="col s4">
            <form action="" method="post">
              {{csrf_field()}}
              <input type="hidden" name="_method" value="DELETE">
              <td><button type="submit" class="btn btn-outline-primary btn-sm btn-block" name="borrar">Completa</button></td>
            </form>
          </div>
          <div class="col s4">
            <form action="" method="post">
              {{csrf_field()}}
              <input type="hidden" name="_method" value="DELETE">
              <td><button type="submit" class="btn btn-outline-primary btn-sm btn-block" name="borrar">Proyecto</button></td>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <hr>
@endsection
