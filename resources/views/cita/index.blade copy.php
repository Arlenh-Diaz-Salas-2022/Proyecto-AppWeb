@extends('layouts.plantilla')

@section('title', 'Citas')

@section('content_header')
    <h1></h1>
@stop
    <form action="#" method="POST"></form>
@section('contenido')
    <div class="container">
        <div class="row">
            <div class="col">
                <label for="">Identidicación</label>
                <input type="text" name="" id="" class="form-control">
            </div>
            <div class="col">
                <label for="">Nombres</label>
                <input type="text" name="" id="" class="form-control">
            </div>
            <div class="col">
                <label for="">Apellidos</label>
                <input type="text" name="" id="" class="form-control">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="">Numero de identificación</label>
                <input type="text" name="" id="" class="form-control">
            </div>
            <div class="col">
                <label for="">Rol</label>
                <input type="text" name="" id="" class="form-control">
            </div>
            <div class="col">
                <label for="">Edad</label>
                <input type="text" name="" id="" class="form-control">
            </div>
        </div>
        <div class="row m-3">
            <div class="col">
                <div class="card">
                    <h5 class="card-header">Tipo de atención</h5>
                    <div class="card-body">
                        <h5 class="card-title">. . .</h5>
                        <select class="form-select"  id="" name="" >
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
                        <select class="form-select"  id="" name="" >
                            <option  disabled selected >Seleccionar Atención</option>
                            <option value="Orientación Estudiantil">Orientación Estudiantil</option>
                            <option value="Permanencia Estudiantil">Permanencia Estudiantil</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <h5 class="card-header">Dia disponible</h5>
                    <div class="card-body">
                        <h5 class="card-title">Special title treatment</h5>
                        <select class="form-select"  id="" name="" >
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
                        <select class="form-select"  id="" name="" >
                            <option  disabled selected >Seleccionar Atención</option>
                            <option value="Orientación Estudiantil">Orientación Estudiantil</option>
                            <option value="Permanencia Estudiantil">Permanencia Estudiantil</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('css')

    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
@stop
