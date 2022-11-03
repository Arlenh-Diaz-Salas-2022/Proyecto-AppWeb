<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class UsurioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios = Usuario::all();
        return view('user.index')->with('usuarios',$usuarios);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $usuarios = new Usuario();
        $usuarios -> id = $request -> get('id');
        $usuarios -> nombres = $request -> get('nombres');
        $usuarios -> apellidos = $request -> get('apellidos');
        $usuarios -> edad = $request -> get('edad');
        $usuarios -> fechana = $request -> get('fechana');
        $usuarios -> carrera = $request -> get('carrera');
        $usuarios -> rol = $request -> get('rol');
        $usuarios -> save();

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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $usuario = Usuario::find($id);
        return view('user.edit')->with('usuario',$usuario);
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
        $usuario=Usuario::find($id);
        $usuario -> id = $request -> get('id');
        $usuario -> nombres = $request -> get('nombres');
        $usuario -> apellidos = $request -> get('apellidos');
        $usuario -> edad = $request -> get('edad');
        $usuario -> fechana = $request -> get('fechana');
        $usuario -> carrera = $request -> get('carrera');
        $usuario -> rol = $request -> get('rol');
        $usuario -> save();

        return redirect('/usuarios');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $usuario=Usuario::find($id);
        $usuario -> delete();
        return redirect('/usuarios');
    }
}
