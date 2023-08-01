<!--Navbar de la aplicación -->
<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-primary">
  <img src="/images/FaoLogo.png" style="padding-right: 10px; width: 200px;">
  <ul class="navbar-nav  ml-auto">
    <li class="nav-item">
      @if (Auth::check())
        @if ($ver = 1)
          <!--Boton de inicio-->
          <li class="nav-item">
            <a class="nav-link" href="{{url('/dashboard')}}">Inicio</a>
          </li>
          <!--Boton de Usuarios-->
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Usuarios
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="{{url('/usuarios')}}">Consulta</a>
                @if (session()->get("role_id") == 1)
                  <a class="dropdown-item" href="{{url('/usuarios/create')}}">Registro</a>
                @endif
              </div>
            </li>
          <!--Boton de Proyectos-->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Proyectos
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="{{url('/proyectos')}}">Consulta</a>
              @if (session()->get("role_id") == 1 || session()->get("role_id") == 15)
                <a class="dropdown-item" href="{{url('/proyectos/create')}}">Registro</a>
              @endif
            </div>
          </li>
          <!--Boton de Salas-->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Salas
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="{{url('/salas')}}">Consulta</a>
              @if (session()->get("role_id") == 1)
                <a class="dropdown-item" href="{{url('/salas/create')}}">Registro</a>
              @endif
              <a class="dropdown-item" href="{{url('/salas/separar')}}">Separacion</a>
            </div>
          </li>
          <!--Boton de Correspondencia-->
          <li class="nav-item dropdown">
            <div class="dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Correspondencia
                </a>
                <ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
                    <a class="dropdown-item" href="#">Consulta Completa</a>
                    <li class="dropdown-divider"></li>
                    <!--General-->
                    <li class="dropdown-submenu">
                      <a class="dropdown-item not-active" tabindex="-1" href="#">General</a>
                      <ul class="dropdown-menu">
                        <a class="dropdown-item" href="{{url('/correspondencias/general')}}">Consulta</a>
                        <a class="dropdown-item" href="{{url('/correspondencias/general/create')}}">Registro</a>
                      </ul>
                    </li>
                    <!--Tesoreria-->
                    <li class="dropdown-submenu">
                      <a class="dropdown-item not-active" tabindex="-1" href="#">Tesoreria</a>
                      <ul class="dropdown-menu">
                        <a class="dropdown-item" href="{{url('/correspondencias/tesoreria')}}">Consulta</a>
                        <a class="dropdown-item" href="{{url('/correspondencias/tesoreria/create')}}">Registro</a>
                      </ul>
                    </li>
                  </ul>
            </div>
          </li>
          <!--<li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Correspondencia
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="{{url('/correspondencias/mainIndex')}}">Consulta</a>
              @if (Auth::user()->role_id == 1 || Auth::user()->role_id == 15 || Auth::user()->role_id == 2)
                <a class="dropdown-item" href="{{url('/correspondencias/mainCreate')}}">Registro</a>
              @endif
            </div>
          </li>-->
          <!--Boton de Equipos-->
          <li class="nav-item">
            <a class="nav-link" href="">Equipos</a>
          </li>
          <!--Boton de Sedes-->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Sedes
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="{{url('/sedes')}}">Consulta</a>
              @if (session()->get("role_id") == 1 || session()->get("role_id") == 15)
                <a class="dropdown-item" href="{{url('/sedes/create')}}">Registro</a>
              @endif
            </div>
          </li>
          <!--Boton de Sesion-->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Sesión
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
              <span class="dropdown-item-text">{{auth()->user()->nombre}} {{auth()->user()->apellido}}</span>
              <span class="dropdown-item-text">Rol Actual: {{session()->get("rol_nombre")}}</span>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Perfil</a>
              <a class="dropdown-item" href="#">Cambio Contraseña</a>
              <form action="{{route('logout')}}" method="post">
                {{csrf_field()}}
                <button class="dropdown-item">Cerrar Sesión</button>
              </form>
            </div>
          </li>
        @else
          <!--Boton de inicio-->
          <li class="nav-item">
            <a class="nav-link" href="{{url('/dashboard')}}">Inicio</a>
          </li>
          <!--Boton de Sesion-->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Sesión
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
              <span class="dropdown-item-text">{{auth()->user()->nombre}} {{auth()->user()->apellido}}</span>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Perfil</a>
              <a class="dropdown-item" href="#">Cambio Contraseña</a>
              <form action="{{route('logout')}}" method="post">
                {{csrf_field()}}
                <button class="dropdown-item">Cerrar Sesión</button>
              </form>
            </div>
          </li>
        @endif
      @endif
    </li>
  </ul>
</nav>
