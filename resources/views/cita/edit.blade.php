<?php

use PhpOption\Option;

 $conexion = mysqli_connect('localhost','root','','appwebproyecto');
?>
@extends('layouts.plantilla')

@section('title', 'Crear | Cita')

@section('content_header')
    <h1></h1>
@stop

@section('contenido')
<form action="/citas" method="post" class="needs-validation" novalidate>
    @csrf
    <div class="container">
        <div class="row">
            <div class="col">
                <label for="">Identidicación</label>
                <input type="text" name="num_identificacion" id="num_identificacion" class="form-control" value="{{$usuario->num_identificacion}}" readonly>
            </div>
            <div class="col">
                <label for="">Nombres</label>
                <input type="text" name="nombres" id="nombres" class="form-control" value="{{$usuario->nombres}}" readonly>
            </div>
            <div class="col">
                <label for="">Apellidos</label>
                <input type="text" name="apellidos" id="apellidos" class="form-control"value="{{$usuario->apellidos}}" readonly>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="">Rol</label>
                <input type="text" name="rol" id="rol" class="form-control"value="{{$usuario->rol}}"readonly>
            </div>
            <div class="col">
                <label for="">Edad</label>
                <input type="text" name="edad" id="edad" class="form-control"value="{{$usuario->edad}}"readonly>
            </div>
        </div>
        <div class="row m-3">
            <div class="col">
                <div class="card">
                    <h5 class="card-header">Tipo de atención</h5>
                    <div class="card-body">
                        <h5 class="card-title">Seleccione...</h5>
                        <select class="form-select"  id="tipo_atencion" name="tipo_atencion" required>
                            <option  disabled selected ></option>
                            <option value="Orientación Estudiantil">Orientación Estudiantil</option>
                            <option value="Permanencia Estudiantil">Permanencia Estudiantil</option>
                        </select>
                        <div class="valid-feedback">Campo Listo!</div>
                        <div class="invalid-feedback">Campo Requerido*</div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <h5 class="card-header">Profecional</h5>
                    <div class="card-body">
                        <h5 class="card-title">Seleccione...</h5>
                        <select class="form-select"  id="profecinal" name="profecinal" required>
                        <option  disabled selected ></option>
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
                        <div class="valid-feedback">Campo Listo!</div>
                        <div class="invalid-feedback">Campo Requerido*</div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <h5 class="card-header">Dias disponible</h5>
                    <div class="card-body">
                        <h5 class="card-title">Seleccione...</h5>
                        <select class="form-select"  id="dia_disponible" name="dia_disponible" required>
                            <option  disabled selected ></option>
                            <option  value="Lunes" >Lunes</option>
                            <option value="Martes">Martes</option>
                            <option value="Miercoles">Miercoles</option>
                            <option value="Jueves">Jueves</option>
                            <option value="Viernes">Viernes</option>
                        </select>
                        <div class="valid-feedback">Campo Listo!</div>
                        <div class="invalid-feedback">Campo Requerido*</div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <h5 class="card-header">Hora disponible</h5>
                    <div class="card-body">
                        <h5 class="card-title">Seleccione...</h5>
                        <select class="form-select"  id="hora_disponible" name="hora_disponible" required>
                            <option  disabled selected ></option>
                            <option value="08 : 00 am">08 : 00 am</option>
                            <option value="09 : 00 am">09 : 00 am</option>
                            <option value="10 : 00 am">10 : 00 am</option>
                            <option value="11 : 00 am">11 : 00 am</option>
                            <option value="02 : 00 pm">02 : 00 pm</option>
                            <option value="03 : 00 pm">03 : 00 pm</option>
                            <option value="04 : 00 pm">04 : 00 pm</option>
                        </select>
                        <div class="valid-feedback">Campo Listo!</div>
                        <div class="invalid-feedback">Campo Requerido*</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <a href="/citas" class="btn btn-danger" tabindex="5">Cancelar</a>
    <button type="submit" class="btn btn-success" tabindex="4">Crear</button>
</form>
<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (() => {
    'use strict'

    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    const forms = document.querySelectorAll('.needs-validation')

    // Loop over them and prevent submission
    Array.from(forms).forEach(form => {
    form.addEventListener('submit', event => {
        if (!form.checkValidity()) {
        event.preventDefault()
        event.stopPropagation()
        }

        form.classList.add('was-validated')
    }, false)
    })
    })()
</script>
@endsection
@section('css')

    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
@stop
