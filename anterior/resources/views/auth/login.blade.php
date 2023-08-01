@extends("../layouts.plantilla")

@section("main")
<div class="row">
  <div class="mx-auto" style="width: 400px; margin-top:50px">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h1 class="panel-title">Inicie Sesión</h1>
      </div>
      <div class="panel-body">
        <form method="POST" action="{{route('login')}}" autocomplete="off">
          {{csrf_field()}}
          <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
            <label for="email">Correo</label>
            <input type="email" name="email" class="form-control" value="{{old('email')}}" placeholder="Ingrese correo">
            {!!$errors->first('email', '<span class="help-block"><div class="alert alert-danger" role="alert" style="padding: 0px;">:message</div></span>')!!}
          </div>
          <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
            <label for="password">Contraseña</label>
            <input type="password" name="password" class="form-control" placeholder="Ingrese contraseña">
            {!!$errors->first('password', '<span class="help-block"><div class="alert alert-danger" role="alert" style="padding: 0px;">:message</div></span>')!!}
          </div>

          <button class="btn btn-primary btn-block" type="submit">Iniciar Sesión</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection

@section("footer")

@endsection
