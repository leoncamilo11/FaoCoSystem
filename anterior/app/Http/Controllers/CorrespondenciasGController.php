<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Correspondencia;
use App\Entidade;
//use App\Estado;
use App\User;
use App\Area;
use App\Sede;
use App\Proveedore;
use App\Proyecto;
//use App\Paise;
//use App\Ciudade;
use App\CodigoArchivo;
use App\TipoCorrespondencia;

class CorrespondenciasGController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $correspondencias=Correspondencia::paginate(15);
        return view("correspondencias/general/index", compact("correspondencias"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $contador = Correspondencia::withTrashed()->count();
        $contador = $contador + 1;
        if ($contador<10) {
          // code...
          $consecutivo = '000' . $contador;
        } else {
          // code...
          if ($contador<100) {
            // code...
            $consecutivo = '00' . $contador;
          } else {
            // code...
            if ($contador<1000) {
              // code...
              $consecutivo = '0' . $contador;
            }
          }
        }
        //echo $consecutivo;

        $hoy = date("l j F, Y, g:i a");
        //$estados=Estado::all();
        //$recepcionistas=User::all()->/*where('role_id',2)->*/values('name', 'apellido');
        $codigosArchivo=CodigoArchivo::all();
        $proyectos=Proyecto::all();
        //echo $codigosArchivo;
        $tiposCorrespondencia=TipoCorrespondencia::all();
        //echo $tiposCorrespondencia;
        $usuariosRecibe=User::all();
        $usuariosSolicita=User::all();
        //$remitentesConsultor=User::all();
        //$remitentesProveedor=Proveedore::all();
        //$ciudades=Ciudade::all();
        //$paises=Paise::all();
        return view('correspondencias.general.create', compact('codigosArchivo', 'tiposCorrespondencia', 'hoy', 'usuariosSolicita', 'usuariosRecibe', 'proyectos', 'consecutivo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $correspondencia = $this->validate(request(),[
          'codigoArchivo_id'=>'required',
          'tipoCorrespondencia_id'=>'required',
          'usuarioSolicita_id'=>'required',
          'usuarioRecibe_id'=>'required'
        ]);

        $correspondencia = new Correspondencia;
        $correspondencia->consecutivo=$request->consecutivo;
        $correspondencia->recepcionistaRegistra_id=$request->recepcionista_id;
        $correspondencia->codigoArchivo_id=$request->codigoArchivo_id;
        $correspondencia->tipoCorrespondencia_id=$request->tipoCorrespondencia_id;
        $correspondencia->detalles=$request->detalle;
        $correspondencia->usuarioSolicita_id=$request->usuarioSolicita_id;
        $correspondencia->usuarioRecibe_id=$request->usuarioRecibe_id;
        $correspondencia->save();
        //echo $correspondencia;

        return redirect('/correspondencias/general');
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
        $usuariosRecibe=User::all();
        $correspondencia=Correspondencia::findorFail($id);
        return view("correspondencias.general.edit", compact('correspondencia', 'usuariosRecibe'));
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
        $correspondencia = $this->validate(request(),[
          'usuarioRecibe_id'=>'required'
        ]);

        $correspondencia=Correspondencia::findorFail($id);
        $correspondencia->update([
          'usuarioRecibe_id'=>$request->usuarioRecibe_id,
          'detalles'=>$request->detalle
        ]);
        return redirect("/correspondencias/general");
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
        $correspondencia=Correspondencia::findorFail($id);
        $correspondencia->delete();
        return redirect("/correspondencias/general")->with('notification', 'El registro se ha borrado correctamente');
    }

    public function getInfoUser($id)
    {
      return User::where('id', $id)->get();
    }

    public function getEntidade($id)
    {
      return Entidade::where('id', $id)->get();
    }

    public function getCiudades($id)
    {
      return Ciudade::where('pais_id', $id)->get();
    }
}
