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
          var documento = proveedor[i].tipoDocumento_id;
          //alert(documento);
          if (documento == 1){
            $('#tipoPersona').val('Persona Natural');
          } else if (documento == 6) {
            $('#tipoPersona').val('Persona Juridica');
          } else {
            $('#tipoPersona').val('Persona Extranjera');
          }

          //$('#tipoPersona').val(proveedor[i].codigo);
          $('#documento').val(proveedor[i].documento);
          $('#digito').val(proveedor[i].noChequeo);
          $('#supplier').val(proveedor[i].supplier);
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

// Trabajo con Ventana de Roles.
// Trabajo con Ventana de Roles.
/**const modal = $('#modal-seleccionar-rol');
if (modal.length && modal.data('rol-set') == 'NO')
{
  ('#modal-seleccionar-rol').modal('show');
}**/

//Formato de valores a moneda en el create de tesoreria
$('input.CurrencyInput').on('blur', function() {
    var valor = this.value;
    var name = this.name;
    const value = this.value.replace(/,/g, '');
    this.value = parseFloat(value).toLocaleString('es-CO');
    if (name == "valorFacturaV"){
    	document.f1.valorFactura.value = valor
    } else if (name == "valorIvaV"){
    	document.f1.valorIva.value = valor
    } else if (name == "valorImpoconsumoV"){
    	document.f1.valorImpoconsumo.value = valor
    }
  });

//input personalizado para cargar archivos
$(".custom-file-input").on("change", function() {
  var fileName = $(this).val().split("\\").pop();
  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});

//Ventana de varios roles
const modal = $('#modal-seleccionar-rol');
if (modal.length && modal.data('rol-set') == 'NO') {
    modal.modal('show');
}

$('.asignar-rol').on('click', function (event) {
        event.preventDefault();
        const data = {
            rol_id: $(this).data('rolid'),
            rol_nombre: $(this).data('rolnombre'),
            activo: $(this).data('rolrolactivo'),
            _token: $('input[name=_token]').val()
        }
        ajaxRequest(data, '/ajax-sesion', 'asignar-rol');
    });

function ajaxRequest(data, url, funcion) {
    $.ajax({
        url: url,
        type: 'POST',
        data: data,
        success: function (respuesta) {
            if (funcion == 'asignar-rol' && respuesta.mensaje == 'ok') {
                $('#modal-seleccionar-rol').hide();
                location.reload();
            }
        }
    });
}

//busqueda tesoreria
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});

//INPUT BUSQUEDA DENTRO DE LISTAS DESPLEGABLES
$( function() {
    $.widget( "custom.combobox", {
      _create: function() {
        this.wrapper = $( "<span>" )
          .addClass( "custom-combobox" )
          .insertAfter( this.element );

        this.element.hide();
        this._createAutocomplete();
        this._createShowAllButton();
      },

      _createAutocomplete: function() {
        var selected = this.element.children( ":selected" ),
          value = selected.val() ? selected.text() : "";

        this.input = $( "<input>" )
          .appendTo( this.wrapper )
          .val( value )
          .attr( "title", "" )
          .addClass( "custom-combobox-input ui-widget ui-widget-content ui-state-default ui-corner-left" )
          .autocomplete({
            delay: 0,
            minLength: 0,
            source: $.proxy( this, "_source" )
          })
          .tooltip({
            classes: {
              "ui-tooltip": "ui-state-highlight"
            }
          });

        this._on( this.input, {
          autocompleteselect: function( event, ui ) {
            ui.item.option.selected = true;
            this._trigger( "select", event, {
              item: ui.item.option
            });
          },

          autocompletechange: "_removeIfInvalid"
        });
      },

      _createShowAllButton: function() {
        var input = this.input,
          wasOpen = false;

        $( "<a>" )
          .attr( "tabIndex", -1 )
          .attr( "title", "Show All Items" )
          .tooltip()
          .appendTo( this.wrapper )
          .button({
            icons: {
              primary: "ui-icon-triangle-1-s"
            },
            text: false
          })
          .removeClass( "ui-corner-all" )
          .addClass( "custom-combobox-toggle ui-corner-right" )
          .on( "mousedown", function() {
            wasOpen = input.autocomplete( "widget" ).is( ":visible" );
          })
          .on( "click", function() {
            input.trigger( "focus" );

            // Close if already visible
            if ( wasOpen ) {
              return;
            }

            // Pass empty string as value to search for, displaying all results
            input.autocomplete( "search", "" );
          });
      },

      _source: function( request, response ) {
        var matcher = new RegExp( $.ui.autocomplete.escapeRegex(request.term), "i" );
        response( this.element.children( "option" ).map(function() {
          var text = $( this ).text();
          if ( this.value && ( !request.term || matcher.test(text) ) )
            return {
              label: text,
              value: text,
              option: this
            };
        }) );
      },

      _removeIfInvalid: function( event, ui ) {

        // Selected an item, nothing to do
        if ( ui.item ) {
          return;
        }

        // Search for a match (case-insensitive)
        var value = this.input.val(),
          valueLowerCase = value.toLowerCase(),
          valid = false;
        this.element.children( "option" ).each(function() {
          if ( $( this ).text().toLowerCase() === valueLowerCase ) {
            this.selected = valid = true;
            return false;
          }
        });

        // Found a match, nothing to do
        if ( valid ) {
          return;
        }

        // Remove invalid value
        this.input
          .val( "" )
          .attr( "title", value + " didn't match any item" )
          .tooltip( "open" );
        this.element.val( "" );
        this._delay(function() {
          this.input.tooltip( "close" ).attr( "title", "" );
        }, 2500 );
        this.input.autocomplete( "instance" ).term = "";
      },

      _destroy: function() {
        this.wrapper.remove();
        this.element.show();
      }
    });

    $( "#combobox" ).combobox();
    $( "#toggle" ).on( "click", function() {
      $( "#combobox" ).toggle();
    });
  } );
