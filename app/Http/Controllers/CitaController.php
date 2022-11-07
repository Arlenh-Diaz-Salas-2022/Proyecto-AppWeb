<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\cita;
use App\Models\psicologo;
use App\Models\Usuario;

class CitaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {
        $psicologos = psicologo::all();
        $usuarios = Usuario::all();
        return view('cita.index')->with('usuarios',$usuarios);
        return view('cita.index')->with('psicologos',$psicologos);

    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cita.edit');


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $citas = new cita();
        $citas -> num_identificacion = $request -> get('num_identificacion');
        $citas -> nombres = $request -> get('nombres');
        $citas -> apellidos = $request -> get('apellidos');
        $citas -> num_identificacion = $request -> get('num_identificacion');
        $citas -> rol = $request -> get('rol');
        $citas -> edad = $request -> get('edad');
        $citas -> tipo_atencion = $request -> get('tipo_atencion');
        $citas -> profecinal = $request -> get('profecinal');
        $citas -> dia_disponible = $request -> get('dia_disponible');
        $citas -> hora_disponible = $request -> get('hora_disponible');
        $citas -> save();
        return redirect('/citas');
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
        $usuarios = Usuario::find($id);
        return view('cita.edit')->with('usuario',$usuarios);
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
        $citas = cita::find($id);
        $citas -> num_identificacion = $request -> get('num_identificacion');
        $citas -> nombres = $request -> get('nombres');
        $citas -> apellidos = $request -> get('apellidos');
        $citas -> num_identificacion = $request -> get('num_identificacion');
        $citas -> rol = $request -> get('rol');
        $citas -> edad = $request -> get('edad');
        $citas -> tipo_atencion = $request -> get('tipo_atencion');
        $citas -> profecinal = $request -> get('profecinal');
        $citas -> dia_disponible = $request -> get('dia_disponible');
        $citas -> hora_disponible = $request -> get('hora_disponible');
        $citas -> save();
        return redirect('/citas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cita=cita::find($id);
        $cita -> delete();
        return redirect('/citas');
    }
}
