@extends('layouts.plantilla')

@section('title', 'Crear|Usuario')

@section('content_header')
    <h1>Crear usuarios</h1>
@stop

@section('contenido')
<form action="/usuarios" method="POST">
    @csrf
<div class="mb-3">
        <label for="" class="form-label"></label>
        <input type="number" class="form-control" id="id" name="id" placeholder="Numero de identificación">
    </div>
    <div class="row g-3 mb-3">
        <div class="col">

            <input type="text" id="nombres" name="nombres" class="form-control" placeholder="Nombres" aria-label="First name">
        </div>
        <div class="col">

            <input type="text" class="form-control" id="apellidos" name="apellidos" placeholder="Apellidos" aria-label="Last name">
        </div>
    </div>
    <div class="row g-3 mb-3">
        <div class="col">

            <input type="text" class="form-control" id="edad" name="edad" placeholder="Edad de nacimiento" aria-label="First name">
        </div>
        <div class="col">

            <input type="date" class="form-control "id="fechana" name="fechana" placeholder="Fecha de nacimiento" aria-label="Last name">
        </div>
    </div>
    <!-- ---------------------------------------- -->
    <div class="row g-3 mb-3">
        <div class="col">
            <select class="form-select" aria-label="Default select example" id="carrera" name="carrera">
                <option selected>Seleccionar carrera</option>
                <option value="Ingenieria de sistemas">Ingenieria de sistemas</option>
                <option value="Contaduria publica">Contaduria publica</option>
                <option value="Psicologia">Psicologia</option>
            </select>
        </div>
        <div class="col">
            <input type="text" class="form-control" id="rol" name="rol" value="Usuario" placeholder="Estudiante" aria-label="Last name" readonly>
        </div>
    </div>
    <a href="/usuarios" class="btn btn-danger" tabindex="5">Cancelar</a>
    <button type="submit" class="btn btn-success" tabindex="4">Crear</button>
</form>
@endsection
