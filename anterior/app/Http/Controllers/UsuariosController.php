<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\TipoDocumento;
use App\Role;
use App\Entidade;
use App\Http\Requests\CreateUsuariosRequest;

class UsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        //
        $usuarios=User::paginate(15);
        $roles=Role::with('users')->get();
        //dd($roles);
        //return($roles);
      return view("usuarios.index", compact("usuarios"));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $tipoDocumentos=TipoDocumento::all();
        $roles=Role::all();
        $entidades=Entidade::all();
        return view('usuarios.create', compact('tipoDocumentos', 'roles', 'entidades'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //return($request);
        $usuario = $this->validate(request(),[
          'nombre'=>'required|string',
          'apellido'=>'required|string',
          'index'=>'required|string',
          'tipoDocumento_id'=>'required',
          'documento'=>'required|string',
          'email'=>'email|required|string',
          'password'=>'required|string',
          'telefono'=>'required|string',
          'entidad_id'=>'required|integer',
          'role_id'=>'required|array'
        ]);

        //Forma simplificada por laravel
        //Se crea el usuario con los campos de la tabla
        //$usuario = User::create($request->all());
        //se relacionan los roles que se escogen para el usuario
        //$usuario->roles()->sync($request->role_id);

        //Forma manual de crear un objeto en la base de datos
        //Se crea el usuario con los campos de la tabla
        $usuario = new User;
        $usuario->nombre=$request->nombre;
        $usuario->apellido=$request->apellido;
        $usuario->index=$request->index;
        $usuario->tipoDocumento_id=$request->tipoDocumento_id;
        $usuario->documento=$request->documento;
        $usuario->email=$request->email;
        $usuario->email_verified_at=now();
        $usuario->password=bcrypt($request->password);
        $usuario->telefono=$request->telefono;
        $usuario->entidad_id=$request->entidad_id;
        //$usuario->activo=1;
        //$usuario->area_id=$request->area_id;
        $usuario->save();

        //se relacionan los roles que se escogen para el usuario
        $usuario->roles()->sync($request->role_id);

        return redirect('/usuarios')->with('mesage', 'Usuario creado');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $usuario=User::findorFail($id);
        return view("usuarios.show", compact("usuario"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $tipoDocumentos=TipoDocumento::all();
        $entidades=Entidade::all();
        $roles=Role::all();
        $usuario=User::findorFail($id);
        return view("usuarios.edit", compact('usuario', 'tipoDocumentos', 'entidades', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      //
      $usuario = $this->validate(request(),[
        //'nombre'=>'required|string',
        //'apellido'=>'required|string',
        //'tipoDocumento_id'=>'required',
        //'documento'=>'required|string',
        'email'=>'email|required|string',
        'password'=>'required|string',
        'role_id'=>'required',
        'telefono'=>'required|string',
        'entidade_id'=>'required'
        //'area_id'=>'required'
      ]);

      //return($usuario);

      $usuario=User::findorFail($id);
      $usuario->update($request->all());
      $usuario->update([
          'email' => $request->email,
          'password' => bcrypt($request->password),
          'telefono' => $request->telefono,
          'entidade_id' => $request->entidad_id
      ]);
      $usuario->roles()->sync($request->role_id);
      return redirect("/usuarios");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $usuario=User::findorFail($id);
        $usuario->delete();
        return redirect("/usuarios");
    }
}
