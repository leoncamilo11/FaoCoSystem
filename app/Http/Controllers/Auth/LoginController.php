<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Auth;
use App\User;

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
        //$user_id = auth()->user();
        /*$roles = User::find(2)->roles()->where('user_id', $user_id)->get();

        return $roles;*/

        //if (User::roles()->where('estado', 1)->get()->isNotEmpty()) {
          // code...
          return redirect()->route('dashboard');
        //}
        //else {
          // code...
          //Auth::logout();
          //return redirect('/');
        //}
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
}
