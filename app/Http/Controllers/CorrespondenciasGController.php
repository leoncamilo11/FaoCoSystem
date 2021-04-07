<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Correspondencia;
use App\Entidade;
use App\Estado;
use App\User;
use App\Area;
use App\Sede;
use App\Proveedore;
use App\Paise;
use App\Ciudade;

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
        $correspondencias=Correspondencia::all();
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
        $contador = Correspondencia::all()->count();
        $hoyConsecutivo = date("Y-m-");
        $contador = $contador + 1;
        //echo $contador;
        if ($contador<10) {
          // code...
          $consecutivo = 'G-' . $hoyConsecutivo . '000' . $contador;
        } else {
          // code...
          if ($contador<100) {
            // code...
            $consecutivo = 'G-' . $hoyConsecutivo . '00' . $contador;
          } else {
            // code...
            if ($contador<1000) {
              // code...
              $consecutivo = 'G-' . $hoyConsecutivo . '0' . $contador;
            }
          }

        }

        //echo $consecutivo;

        $hoy = date("l j F, Y, g:i a");
        $estados=Estado::all();
        $recepcionistas=User::all()->/*where('role_id',2)->*/values('name', 'apellido');
        $usuariosRecibe=User::all();
        $remitentesConsultor=User::all();
        $remitentesProveedor=Proveedore::all();
        $ciudades=Ciudade::all();
        $paises=Paise::all();
        return view('correspondencias.general.create', compact('consecutivo', 'paises', 'ciudades', 'remitentesProveedor', 'remitentesConsultor', 'hoy', 'estados', 'recepcionistas', 'usuariosRecibe'));
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
          'recepcionista_id'=>'required',
          'numeroGuia'=>'required|string',
          'remitenteE', 'remitenteC_id', 'remitenteP_id',
          'ciudadE_id'=>'required',
          'ciudadR_id'=>'required',
          'estado_id'=>'required',
          'usuarioRecibe_id'=>'required'
        ]);

        $correspondencia = new Correspondencia;
        $correspondencia->consecutivo=$request->consecutivo;
        $correspondencia->recepcionistaRegistra_id=$request->recepcionista_id;
        $correspondencia->numeroGuia=$request->numeroGuia;
        $correspondencia->remitenteE=$request->remitenteE;
        $correspondencia->remitenteC_id=$request->remitenteC_id;
        $correspondencia->remitenteP_id=$request->remitenteP_id;
        $correspondencia->detalles=$request->detalle;
        $correspondencia->ciudadE_id=$request->ciudadE_id;
        $correspondencia->ciudadR_id=$request->ciudadR_id;
        $correspondencia->estado_id=$request->estado_id;
        $correspondencia->usuarioRecibe_id=$request->usuarioRecibe_id;
        $correspondencia->save();


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
    }

    public function getCiudades($id)
    {
      return Ciudade::where('pais_id', $id)->get();
    }
}
