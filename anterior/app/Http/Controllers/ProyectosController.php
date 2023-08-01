<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Proyecto;
use App\Http\Requests\CreateProyectosRequest;

class ProyectosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        //
        $proyectos=Proyecto::paginate(15);
        return view("proyectos.index", compact("proyectos"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("proyectos.create");
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
        $proyecto = $this->validate(request(),[
          'codigo' => 'required|string',
          'nombre' => 'required|string'
        ]);

        $proyecto = new Proyecto;
        $proyecto->codigo=$request->codigo;
        $proyecto->nombre=$request->nombre;
        $proyecto->detalle=$request->detalle;
        $proyecto->save();

        return redirect('/proyectos');
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
        $proyecto=Proyecto::findorFail($id);
        return view("proyectos.show", compact("proyecto"));
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
        $proyecto=Proyecto::findorFail($id);
        return view("proyectos.edit", compact("proyecto"));
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
        $proyecto = $this->validate(request(),[
          'codigo' => 'required|string',
          'nombre' => 'required|string'
        ]);

        $proyecto=Proyecto::findorFail($id);
        $proyecto->update($request->all());
        return redirect("/proyectos");
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
        $proyecto=Proyecto::findorFail($id);
        $proyecto->delete();
        return redirect("/proyectos");
    }
}
