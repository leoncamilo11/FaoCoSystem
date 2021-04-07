<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Sistema Gestion FAOCO</title>
    <!-- Bootstrap link Js -->
    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/momentjs/2.14.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>
    <!-- Bootstrap link CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
      body.h1,h2,h3,h4,h5,h6{
        color: rgb(0, 123, 255);
      }

      hr{
        margin: 10px;
      }

      .main>.div{
        text-align: center;
        margin: 30px 10px 20px 10px;
        padding: 30px 10px 20px 10px;
      }

      .footer{
        background-color: rgb(0, 123, 255);
        position: fixed;
        text-align: center;
        bottom: 0px;
        width: 100%;
        color: rgb(255, 255, 255);
        padding: 10px;
      }

      .dropdown-submenu {
          position: relative;
      }

      .dropdown-submenu>.dropdown-menu {
          top: 0;
          left: 100%;
          margin-top: -6px;
          margin-left: -1px;
          -webkit-border-radius: 0 6px 6px 6px;
          -moz-border-radius: 0 6px 6px;
          border-radius: 0 6px 6px 6px;
      }

      .dropdown-submenu:hover>.dropdown-menu {
          display: block;
      }

      .dropdown-submenu>a:after {
          display: block;
          content: " ";
          float: right;
          width: 0;
          height: 0;
          border-color: transparent;
          border-style: solid;
          border-width: 5px 0 5px 5px;
          border-left-color: #ccc;
          margin-top: 5px;
          margin-right: -10px;
      }

      .dropdown-submenu:hover>a:after {
          border-left-color: #fff;
      }

      .dropdown-submenu.pull-left {
          float: none;
      }

      .dropdown-submenu.pull-left>.dropdown-menu {
          left: -100%;
          margin-left: 10px;
          -webkit-border-radius: 6px 0 6px 6px;
          -moz-border-radius: 6px 0 6px 6px;
          border-radius: 6px 0 6px 6px;
      }

      .not-active {
          pointer-events: none;
          cursor: default;
        }
    </style>
    <script type="text/javascript">
  /**Funciones encargadas de mostrar el campo de lista en base al remitente**/
      function mostrarRemitente(id) {
        //Muestra input para colocar el nombre del remitente externo
        if (id == "1") {
          $("#remitenteExterno").show();
          $("#remitenteConsultor").hide();
          $("#remitenteProveedor").hide();
        }
        //Muestra lista desplegables cuando el remitente es un consultor registrado
        if (id == "2") {
          $("#remitenteExterno").hide();
          $("#remitenteConsultor").show();
          $("#remitenteProveedor").hide();
        }
        //Muestra lista desplegable cuando el remitente es un proveedor registrado
        if (id == "3") {
          $("#remitenteExterno").hide();
          $("#remitenteConsultor").hide();
          $("#remitenteProveedor").show();
        }
      }

//PAIS CIUDADES ENVIA FUNCIONES
/**Funciones encargadas de seleccionar las ciudades en base a los paises en la seccion de envia del modulo de correspondencia general**/
      //Se encarga de detectar cambios sobre el select de pais envia y llama la funcion onChangeGetCiudadesE
      $(function() {
        $('#paisE_id').on('change', onChangeGetCiudadesE);
      });
      //Se encarga de devolver los ciudades segun el pais en html
      function  onChangeGetCiudadesE(){
        //Se encarga de guardar el id del pais que se encuentra seleccionado
        var pais = $(this).val();
        //alert(pais);
        //Se encarga de llamar al metodo getCiudades dentro del controlador CorrespondenciasGController por medio de una ruta get
        $.get('/ciudades/' + pais, function(ciudades){
          //alert(ciudades);
          //Guarda la line a de codigo por defecto en el select de ciudades
          var selectHtml = '<option value="" selected disabled>Seleccione Ciudad</option>';
          //Recorre la cantidad de ciudades recibidas
          for (var i=0; i<ciudades.length; ++i) {
            //Asigna las ciudades dentro de la linea de codigo en Html a la variable selectHtml
            selectHtml += '<option value="' + ciudades[i].id + '">' + ciudades[i].nombre + '</option>';
          }
          //Se le pasa por medio del id del select la variable que contiene el array de ciudades
          $('#ciudadE_id').html(selectHtml);
        });
      }

//PAIS CIUDADES RECIBE FUNCIONES
/**Funciones encargadas de seleccionar las ciudades en base a los paises en la seccion de recibe del modulo de correspondencia general**/
      //Se encarga de detectar cambios sobre el select de pais recibe y llama la funcion onChangeGetCiudadesR
      $(function() {
        $('#paisR_id').on('change', onChangeGetCiudadesR);
      });
      //Se encarga de devolver los ciudades segun el pais en html
      function  onChangeGetCiudadesR(){
        //Se encarga de guardar el id del pais que se encuentra seleccionado
        var pais = $(this).val();
        //alert(pais);
        //Se encarga de llamar al metodo getCiudades dentro del controlador CorrespondenciasGController por medio de una ruta get
        $.get('/ciudades/' + pais, function(ciudades){
          //alert(ciudades);
          //Guarda la line a de codigo por defecto en el select de ciudades
          var selectHtml = '<option value="" selected disabled>Seleccione Ciudad</option>';
          //Recorre la cantidad de ciudades recibidas
          for (var i=0; i<ciudades.length; ++i) {
            //Asigna las ciudades dentro de la linea de codigo en Html a la variable selectHtml
            selectHtml += '<option value="' + ciudades[i].id + '">' + ciudades[i].nombre + '</option>';
          }
          //Se le pasa por medio del id del select la variable que contiene el array de ciudades
          $('#ciudadR_id').html(selectHtml);
        });
      }

  //INFO PROVEEDOR RESGISTRO TESORERIA
    /**Funciones que se encargan de seleccionar los datos deseados por la vista de registro de tesoreria en base al proveedor que se seleccione**/
      //Se encarga de detectar cambios sobre el select de proveedor y llama la funcion onChangeGetInfoProveedor
      $(function() {
        $('#proveedor_id').on('change', onChangeGetInfoProveedor);
      });
      //Se encarga de devolver los datos del proveedor segun el proveedor dentro del value
      function onChangeGetInfoProveedor(){
        //Se encarga de guardar el id del proveedor que se encuentra seleccionado
        var proveedor = $(this).val();
        //alert(proveedor);
        //Se encarga de llamar al metodo getInfoProveedor dentro del controlador CorrespondenciasTController por medio de una ruta get
        $.get('/proveedor/' + proveedor, function(proveedor){
          //Recorre el objeto para ingresar a los arrays con sus atributos
          for (var i=0; i<proveedor.length; ++i) {
            //console.log(proveedor[i].tipoDocumento_id);
            //Asigna dentro del value correspondiente a cada input el valor solicitado
            $('#tipoPersona').val(proveedor[i].codigo);
            $('#documento').val(proveedor[i].documento);
            $('#digito').val(proveedor[i].noChequeo);
          }
        });
      }

    //INFO PROYECTO RESGISTRO TESORERIA
      /**Funciones que se encargan de seleccionar los datos deseados por la vista de registro de tesoreria en base al proyecto que se seleccione**/
        //Se encarga de detectar cambios sobre el select de proyectos y llama la funcion onChangeGetInfoProyecto
        $(function() {
          $('#proyecto_id').on('change', onChangeGetInfoProyecto);
        });
        //Se encarga de devolver los datos del proyecto segun el proyecto dentro del value
        function onChangeGetInfoProyecto(){
          //Se encarga de guardar el id del proyecto que se encuentra seleccionado
          var proyecto = $(this).val();
          //alert(proyecto);
          //Se encarga de llamar al metodo getInfoProyecto dentro del controlador CorrespondenciasTController por medio de una ruta get
          $.get('/proyecto/' + proyecto, function(proyecto){
            //Recorre el objeto para ingresar a los arrays con sus atributos
            for (var i=0; i<proyecto.length; ++i) {
              //console.log(proyecto[i].actividad);
              //Asigna dentro del value correspondiente a cada input el valor solicitado
              $('#actividad').val(proyecto[i].actividad);
            }
          });
        }
    </script>
  </head>
  <body>
    <div class="header">
      @include("../layouts.navbar")
      @yield("header")
    </div>
    <div class="main">
      <div class="div">
        @yield("main")
        @if(session()->has('flash'))
          <div class="alert alert-info" role="alert" style="margin:50px">{{session('flash')}}</div>
        @endif
      </div>
    </div>
    <div class="footer">
      Fao Colombia || Sistema de Gestion Modulos Fao || Derechos Reservados
      @yield("footer")
    </div>
  </body>
</html>
