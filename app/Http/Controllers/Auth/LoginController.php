<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\User;
use Session;

class LoginController extends Controller
{

  public  function __construct()
  {
    $this->middleware('guest', ['only' => 'showLoginForm']);
  }

  public function showLoginForm()
  {
    //$roles=Role::all();
    //return view('auth.login', compact('roles'));
    return view('auth.login');
  }

  public function login()
  {
    //Se valida que se escriba lo que se espera en los campos de email y password
    $credenciales =  $this->validate(request(),[
      'email' => 'email|required|string',
      'password' => 'required|string',
      //'rol_id' => 'required'
    ]);
    //return $credenciales;

      //Valida que los datos se encuentran registrados en la base de datos
      if(Auth::attempt($credenciales))
      {
        //Almaceno los datos dentro de su respectiva variable
        $email = auth()->user()->email;
        $nombre = auth()->user()->nombre;
        $apellido = auth()->user()->apellido;
        $id = auth()->user()->id;
        //Creo variables de session a partir de las variables que contienen los datos basicos del usuario
        Session::put([
          'email' => $email,
          'nombre' => $nombre,
          'apellido' => $apellido,
          'id' => $id
        ]);
        //$datos = Session::all();
        //return $datos;
        //return redirect()->route('dashboard');
        /*$user = auth()->user()->id;
        $roles = auth()->user()->roles()->get();
        //return $user;
        //return $roles;*/

        //Comndicional que permite continuar el ingreso en la pagina si existen roles asignados al usuario
        //Traigo los roles del usuario
        $roles = auth()->user()->roles()->get();
        //Reviso si la v ariable $roles se encuentra vacia
        if ($roles->isNotEmpty()) {
          //Paso la coleccion de la variable $roles a un array $rolesArray
          $rolesArray = $roles->toArray();
          //Valida si el array $rolesArray cuenta con un solo rol
          if (count($rolesArray)==1 ) {
            //Almaceno los datos dentro de su respectiva variable
            $role_id = $roles[0]['id'];
            $rol_nombre = $roles[0]['role'];
            $activo = $roles[0]['pivot']->activo;
            //Creo variables de session a partir de las variables que contienen los datos basicos del usuario
            Session::put([
              'role_id' => $role_id,
              'rol_nombre' => $rol_nombre,
              'activo' => $activo
            ]);
            //$datos = Session::all();
            //return $datos;
            if (session()->get('activo') == 1) {
              return redirect()->route('dashboard');
            } else {
              Auth::logout();
              return back()->withErrors(['email' => 'El rol se encuentra inactivo']);
            }
          } else {
            Session::put(['rolesArray' => $rolesArray]);
            //$datos = Session::all();
            //return $datos;
            return redirect()->route('dashboard');
          }
        } else {
          Auth::logout();
          return back()->withErrors(['email' => 'Usuario sin roles asignados']);
        }
      }
      else
      {
        return back()->withErrors(['email' => trans('auth.failed')])
                    ->withInput(request(['email']));
      }
  }

  //Cierra lka sesion y redirecciona al login
  public function logout()
  {
    Auth::logout();
    return redirect('/');
  }

  public function setSession(Request $request)
    {
        if ($request->ajax()) {
            $request->session()->put(
                [
                    'rol_id' => $request->input('rol_id'),
                    'rol_nombre' => $request->input('rol_nombre'),
                    'activo' => $request->input('activo')
                ]
            );
            return response()->json(['mensaje' => 'ok']);
        } else {
            abort(404);
        }
    }
}
