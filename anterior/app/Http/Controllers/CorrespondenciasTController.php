<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Tesoreria;
use App\User;
use App\Proveedore;
use App\TipoPago;
use App\Proyecto;

class CorrespondenciasTController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $consecutivo=$request->get('buscarPorConsecutivo');
        //dd($consecutivo);
        if ($consecutivo) {
          // code...
            $tesorerias=Tesoreria::all()->where('consecutivo', 'like', $consecutivo);
          //  dd($tesorerias);
        } else {
          $tesorerias=Tesoreria::paginate(15);
        }
        //dd($tesorerias);
        return view("correspondencias/tesoreria/index", compact("tesorerias"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $contador = Tesoreria::all()->count();
        $hoyConsecutivo = date("Y-m-");
        $contador = $contador + 1;
        //echo $contador;
        if ($contador<10) {
          // code...
          $consecutivo = 'T-' . $hoyConsecutivo . '000' . $contador;
        } else {
          // code...
          if ($contador<100) {
            // code...
            $consecutivo = 'T-' . $hoyConsecutivo . '00' . $contador;
          } else {
            // code...
            if ($contador<1000) {
              // code...
              $consecutivo = 'T-' . $hoyConsecutivo . '0' . $contador;
            }
          }

        }

        //echo $consecutivo;
        $hoy = date("l j F, Y, g:i a");
        $tipoPagos=TipoPago::all()->values('tipoPago');
        $recepcionistas=User::all()->/*where('role_id',2)->*/values('nombre', 'apellido');
        $remitentes=Proveedore::all()->values('nombre');
        $responsables=User::all()->/*where('role_id',2)->*/values('nombre', 'apellido');
        $proyectos=Proyecto::all();
        return view('correspondencias.tesoreria.create', compact('proyectos', 'consecutivo', 'hoy', 'tipoPagos', 'remitentes', 'responsables'));
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
        $tesoreria = $this->validate(request(),[
          'proveedor_id'=>'required|integer',
          'proyecto_id'=>'required|integer',
          'tipoPago_id'=>'required|integer',
          'fechaFactura'=>'required',
          'noFactura'=>'required|string'
        ]);


        $tesoreria = new Tesoreria;
        $tesoreria->consecutivo=$request->consecutivo;
        $tesoreria->proveedor_id=$request->proveedor_id;
        $tesoreria->fechaFactura=$request->fechaFactura;
        $tesoreria->noFactura=$request->noFactura;
        $tesoreria->responsable_id=$request->responsable_id;
        $tesoreria->proyecto_id=$request->proyecto_id;
        $tesoreria->tipoPago_id=$request->tipoPago_id;
        $tesoreria->valorFactura=$request->valorFactura;
        $tesoreria->valorIva=$request->valorIva;
        $tesoreria->valorImpoconsumo=$request->valorImpoconsumo;
        $tesoreria->detalles=$request->detalle;

        /**if ($request->hasFile('adjunto')) {
          $adjunto = $request->file('adjunto');
          $nombre = "pdf_".$request->consecutivo.".".$adjunto->guessExtension();
          $ruta = public_path("storage/tesoreria/".$nombre);
          if ($adjunto->guessExtension() == "pdf") {
            //copy($adjunto, $ruta);
            $tesoreria->adjunto=$request->file('adjunto')->store('public/tesoreria');
          }else{
            dd("NO ES UN PDF");
          }
        }**/

        if ($request->hasFile('adjunto')) {
          $tesoreria->adjunto=$request->file('adjunto')->store('public/tesoreria');
        }
        $tesoreria->save();

        return redirect('/correspondencias/tesoreria');
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
        $tesoreria=Tesoreria::findorFail($id);
        $tesoreria->delete();
        return redirect("/correspondencias/tesoreria");
    }

    public function getInfoProveedor($id)
    {
        return Proveedore::join('tipo_documentos',  'tipo_documentos.id', '=', 'proveedores.tipoDocumento_id')
                          ->select('tipo_documentos.codigo', 'proveedores.documento', 'proveedores.noChequeo', 'proveedores.supplier', 'proveedores.tipoDocumento_id')
                          ->where('proveedores.id', '=', $id)
                          ->get();
    }

    public function getInfoProyecto($id)
    {
      return Proyecto::where('id', $id)->get();
    }
}
