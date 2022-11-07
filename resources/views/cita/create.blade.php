<?php

use PhpOption\Option;

 $conexion = mysqli_connect('localhost','root','','appwebproyecto');
?>
@extends('layouts.plantilla')

@section('title', 'Citas')

@section('content_header')
    <h1></h1>
@stop

@section('contenido')
<form action="/citas" method="post">
    @csrf
    <div class="container">
        <div class="row">
            <div class="col">
                <label for="">Identidicación</label>
                <input type="text" name="num_identificacion" id="num_identificacion" class="form-control" value="{{$usuario->num_identificacion}}" disabled>
            </div>
            <div class="col">
                <label for="">Nombres</label>
                <input type="text" name="nombres" id="nombres" class="form-control" value="{{$usuario->nombres}}" disabled>
            </div>
            <div class="col">
                <label for="">Apellidos</label>
                <input type="text" name="apellidos" id="apellidos" class="form-control"value="{{$usuario->apellidos}}" disabled>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="">Rol</label>
                <input type="text" name="rol" id="rol" class="form-control"value="{{$usuario->rol}}"disabled>
            </div>
            <div class="col">
                <label for="">Edad</label>
                <input type="text" name="edad" id="edad" class="form-control"value="{{$usuario->edad}}"disabled>
            </div>
        </div>
        <div class="row m-3">
            <div class="col">
                <div class="card">
                    <h5 class="card-header">Tipo de atención</h5>
                    <div class="card-body">
                        <h5 class="card-title">. . .</h5>
                        <select class="form-select"  id="tipo_atencion" name="tipo_atencion" >
                            <option  disabled selected >Seleccionar Atención</option>
                            <option value="Orientación Estudiantil">Orientación Estudiantil</option>
                            <option value="Permanencia Estudiantil">Permanencia Estudiantil</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <h5 class="card-header">Profecional</h5>
                    <div class="card-body">
                        <h5 class="card-title">. . .</h5>
                        <select class="form-select"  id="profecinal" name="profecinal" >
                            <?php
                                $spl="SELECT * from psicologos";
                                $result = mysqli_query($conexion,$spl);
                                while ($mostar=mysqli_fetch_array($result)) {
                            ?>
                                    <option><?php echo $mostar['nombres'] ?></option>
                            <?php
                                }
                                mysqli_close($conexion);
                            ?>
                        </select>

                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <h5 class="card-header">Dia disponible</h5>
                    <div class="card-body">
                        <h5 class="card-title">Special title treatment</h5>
                        <select class="form-select"  id="dia_disponible" name="dia_disponible" >
                            <option  disabled selected >Seleccionar Atención</option>
                            <option value="Orientación Estudiantil">Orientación Estudiantil</option>
                            <option value="Permanencia Estudiantil">Permanencia Estudiantil</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <h5 class="card-header">Hora disponible</h5>
                    <div class="card-body">
                        <h5 class="card-title">Special title treatment</h5>
                        <select class="form-select"  id="hora_disponible" name="hora_disponible" >
                            <option  disabled selected >Seleccionar Atención</option>
                            <option value="Orientación Estudiantil">Orientación Estudiantil</option>
                            <option value="Permanencia Estudiantil">Permanencia Estudiantil</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <a href="/citas" class="btn btn-danger" tabindex="5">Cancelar</a>
    <button type="submit" class="btn btn-success" tabindex="4">Crear</button>
</form>
@endsection
@section('css')

    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
@stop
