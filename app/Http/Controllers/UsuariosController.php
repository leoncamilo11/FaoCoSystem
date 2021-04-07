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
        $usuarios=User::all();
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
        //$roles=Role::all();
        $entidades=Entidade::all();
        return view('usuarios.create', compact('tipoDocumentos'/*, 'roles'*/, 'entidades'));
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
          'tipoDocumento_id'=>'required',
          'documento'=>'required|string',
          'email'=>'email|required|string',
          'password'=>'required|string',
          'telefono'=>'required|string',
          'entidad_id'=>'required'
        ]);

        $usuario = new User;
        $usuario->nombre=$request->nombre;
        $usuario->apellido=$request->apellido;
        $usuario->tipoDocumento_id=$request->tipoDocumento_id;
        //$usuario->tipoDocumento=$request->tipoDocumento;
        $usuario->documento=$request->documento;
        $usuario->email=$request->email;
        $usuario->email_verified_at=now();
        $usuario->password=bcrypt($request->password);
        //$usuario->role_id=$request->role_id;
        $usuario->telefono=$request->telefono;
        $usuario->entidad_id=$request->entidad_id;
        //$usuario->activo=1;
        //$usuario->area_id=$request->area_id;
        $usuario->save();


        return redirect('/usuarios');
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
        $usuario=User::findorFail($id);
        return view("usuarios.edit", compact('usuario', 'tipoDocumentos', 'entidades'));
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
        'nombre'=>'required|string',
        'apellido'=>'required|string',
        'tipoDocumento_id'=>'required',
        'documento'=>'required|string',
        'email'=>'email|required|string',
        //'password'=>'required|string',
        //'role_id'=>'required',
        'telefono'=>'required|string',
        'entidade_id'=>'required'
        //'area_id'=>'required'
      ]);

      //return($usuario);

      $usuario=User::findorFail($id);
      $usuario->update($request->all());
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
