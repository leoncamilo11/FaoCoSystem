@extends("../layouts.plantilla")

@section("main")
  <div class="mx-auto" style="text-align:center;">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h2 class="panel-title">Insertar Correspondencia Tesoreria</h2>
      </div>
      <div class="panel-body">
        <p class="card-text">Ingrese el item que desea registrar</p>
      </div>
    </div>
  </div>
  <hr>
  <div class="mx-auto" style="width:1200px;">
    <form method="post" action="/correspondencias/tesoreria" enctype="multipart/form-data" name="f1">
      <div class="row">
        <div class="form-group col s3">
          <label>Consecutivo</label><br>
          <input type="text" class="form-control" name="consecutivo" value="{{$consecutivo}}">
        </div>
        <div class="form-group col s3">
          <label>Fecha Registro</label>
          <input type="datetime" class="form-control" name="fecha_id" value="<?php echo $hoy;?>" disabled>
        </div>
        <div class="form-group col s3 {{ $errors->has('proveedor_id') ? 'has-error' : '' }}">
          <label>Proveedor</label>
          <select id="proveedor_id" name="proveedor_id" class="form-control">
            <option selected disabled>Seleccione Proveedor</option>
            @foreach($remitentes as $remitente)
              <option value="{{$remitente->id}}">{{$remitente->nombre}}</option>
            @endforeach
          </select>
          {!!$errors->first('proveedor_id', '<span class="help-block"><div class="alert alert-danger" role="alert" style="padding: 0px;">:message</div></span>')!!}
        </div>
        <div class="form-group col s3">
          <label>Supplier Number</label>
          <input type="text" class="form-control" id='supplier' name="supplier" disabled>
        </div>
      </div>
      <div class="row">
        <div class="form-group col-sm-2">
          <label>Tipo Persona</label>
          <input type="text" class="form-control" id="tipoPersona" name="tipoPersona" disabled>
        </div>
        <div class="form-group col-sm-3">
          <label>Nit / CC</label>
          <input type="text" class="form-control" id="documento" name="documento" disabled>
        </div>
        <div class="form-group col-sm-1">
          <label>DV</label>
          <input type="text" class="form-control" id="digito" name="digito" disabled>
        </div>
        <div class="form-group col s3">
          <label>Responsable</label>
          <input type="hidden" name="responsable_id" value="{{auth()->user()->id}}">
          <input type="text" class="form-control" name="" value="{{auth()->user()->nombre}} {{auth()->user()->apellido}}" disabled>
        </div>
        <div class="form-group col-sm-2">
          <label>Index</label>
          <input type="text" class="form-control" name="index" value="{{auth()->user()->index}}" disabled>
        </div>
      </div>
      <div class="row">
        <div class="form-group col s3">
          <label>Simbolo Proyecto</label>
          <select id="proyecto_id" name="proyecto_id" class="form-control selectpicker show-menu-arrow" data-live-search="true" title="-- Seleccione proyecto --"> 
            @foreach($proyectos as $proyecto)
              <option value="{{$proyecto->id}}">{{$proyecto->simbolo}}</option>
            @endforeach
          </select>
        </div>
        <div class="form-group col s3">
          <label>Activity</label>
          <input type="text" class="form-control" id="actividad" name="actividad" value="" disabled>
        </div>
        <div class="form-group col s3">
          <label>Tipo Pago</label>
          <select name="tipoPago_id" class="form-control">
            <option value="" selected disabled>Seleccione Tipo de Pago</option>
            @foreach($tipoPagos as $tipoPago)
              <option value="{{$tipoPago->id}}">{{$tipoPago->tipoPago}}</option>
            @endforeach
          </select>
        </div>
        <div class="form-group col s3">
          <label>Fecha Factura</label>
          <input type="date" class="form-control" name="fechaFactura" >
        </div>
      </div>
      <div class="row">
        <div class="form-group col s3">
          <label>No. Factura / Cuenta Cobro</label>
          <input type="text" class="form-control" name="noFactura">
        </div>
        <div class="form-group col s3 {{ $errors->has('valorFactura') ? 'has-error' : '' }}">
          <label>Valor Factura</label>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text">$</span>
            </div>
            <input type="text" class="form-control CurrencyInput" name="valorFacturaV" placeholder="Valor Factura">
            <input style="display:none" type="text" name="valorFactura">
            {!!$errors->first('valorFactura', '<span class="help-block"><div class="alert alert-danger" role="alert" style="padding: 0px;">:message</div></span>')!!}
          </div>
        </div>
        <div class="form-group col s3 {{ $errors->has('valorIva') ? 'has-error' : '' }}">
          <label>Valor IVA</label>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text">$</span>
            </div>
            <input type="text" class="form-control CurrencyInput" name="valorIvaV" placeholder="Valor Iva">
            <input style="display:none" type="text" name="valorIva">
            {!!$errors->first('valorIva', '<span class="help-block"><div class="alert alert-danger" role="alert" style="padding: 0px;">:message</div></span>')!!}
          </div>
        </div>
        <div class="form-group col s3 {{ $errors->has('valorImpoconsumo') ? 'has-error' : '' }}">
          <label>Valor Ipoconsumo</label>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text">$</span>
            </div>
            <input type="text" class="form-control CurrencyInput" name="valorImpoconsumoV" placeholder="Valor Impoconsumo">
            <input style="display:none" type="text" name="valorImpoconsumo">
            {!!$errors->first('valorImpoconsumo', '<span class="help-block"><div class="alert alert-danger" role="alert" style="padding: 0px;">:message</div></span>')!!}
          </div>
        </div>
      </div>
      <div class="row">
        <div class="form-group col-sm-6">
          <label>Descripcion Pago</label>
          <textarea type="textarea" class="form-control" name="detalle" style="resize: none;" maxlength="140"></textarea>
        </div>
        <div class="form-group col s3">
          <label>Adjuntar Archivo</label>
          <div class="custom-file">
            <input type="file" name="adjunto" class="custom-file-input" id="customFile">
            <label class="custom-file-label" for="customFile">Seleccionar archivo</label>
          </div>
        </div>
      </div>
      {{csrf_field()}}
      <button type="submit" class="btn btn-primary" name="enviar">Enviar</button>
    </form>
    <br>
  </div>
  <!--@if(count($errors)>0)
    @foreach($errors->all() as $error)
      <li>{{$error}}</li>
    @endforeach
  @endif-->
@endsection
