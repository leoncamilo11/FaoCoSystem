<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sede;
use App\Paise;
use App\Http\Requests\CreateSedesRequest;

class SedesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $sedes=Sede::all();
        return view("sedes.index", compact("sedes"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $paises=Paise::all();
        return view("sedes.create", compact("paises"));
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
        $sede = $this->validate(request(),[
          'sede' => 'required|string',
          'ciudade_id' => 'required',
          'direccion' => 'required|string'
        ]);

        $sede = new Sede;
        $sede->sede=$request->sede;
        $sede->ciudade_id=$request->ciudade_id;
        $sede->direccion=$request->direccion;
        $sede->detalles=$request->detalles;
        $sede->save();

        return redirect('/sedes');
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
        $sede=Sede::findorFail($id);
        return view("sedes.show", compact("sede"));
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
        $sede=Sede::findorFail($id);
        return view("sedes.edit", compact("sede"));
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
        $sede = $this->validate(request(),[
          'sede' => 'required|string',
          'ciudade_id' => 'required',
          'direccion' => 'required|string'
        ]);

        $sede=Sede::findorFail($id);
        $sede->update($request->all());

        return redirect("/sedes");
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
        $sede=Sede::findorFail($id);
        $sede->delete();
        return redirect("/sedes");
    }
}
