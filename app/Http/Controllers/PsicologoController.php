<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\psicologo;

class PsicologoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $psicologos = psicologo::all();
        return view('psicologo.index')->with('psicologos',$psicologos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('psicologo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $psicologos = new psicologo();
        $psicologos -> num_identificacion = $request -> get('num_identificacion');
        $psicologos -> nombres = $request -> get('nombres');
        $psicologos -> apellidos = $request -> get('apellidos');
        $psicologos -> telefono = $request -> get('telefono');
        $psicologos -> edad = $request -> get('edad');
        $psicologos -> fechana = $request -> get('fechana');
        $psicologos -> save();

        return redirect('/psicologos');
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
        $psicologo = psicologo::find($id);
        return view('psicologo.edit')->with('psicologo',$psicologo);
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
        $psicologos  = psicologo::find($id);
        $psicologos -> num_identificacion = $request -> get('num_identificacion');
        $psicologos -> nombres = $request -> get('nombres');
        $psicologos -> apellidos = $request -> get('apellidos');
        $psicologos -> telefono = $request -> get('telefono');
        $psicologos -> edad = $request -> get('edad');
        $psicologos -> fechana = $request -> get('fechana');
        $psicologos -> save();

        return redirect('/psicologos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $psicologo=psicologo::find($id);
        $psicologo -> delete();
        return redirect('/psicologos')->with('eliminar','ok');
    }
}
