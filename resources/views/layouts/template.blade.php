<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Sistema Gestion FAOCO</title>
    <!-- Bootstrap link Js -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
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

      .header{
        position: relative;
        width: 100%;
      }

      .main{
        width: 100%;
        text-align: center;
        margin-bottom: 70px;
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
    </style>
    <script type="text/javascript">
      $(document).ready(function(){
        $("#display_emisionInterna").click(function(){
          $("#emisionInterna").show();
          $("#emisionExterna").hide();
        });
        $("#display_emisionExterna").click(function(){
          $("#emisionExterna").show();
          $("#emisionInterna").hide();
        });

        $("#display_recepcionInterna").click(function(){
          $("#recepcionInterna").show();
          $("#recepcionExterna").hide();
        });
        $("#display_recepcionExterna").click(function(){
          $("#recepcionExterna").show();
          $("#recepcionInterna").hide();
        });
      });
    </script>
  </head>
  <body>
    <div class="header">
      @include("../layouts.navbar")
      @yield("header")
    </div>
    <div class="main">
      @yield("main")
      @if(session()->has('flash'))
        <div class="alert alert-info" role="alert" style="margin:50px">{{session('flash')}}</div>
      @endif
    </div>
    <div class="footer">
      Fao Colombia || Sistema de Gestion Modulos Fao || Derechos Reservados
      @yield("footer")
    </div>
  </body>
</html>
