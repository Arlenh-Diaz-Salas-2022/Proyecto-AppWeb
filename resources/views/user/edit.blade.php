@extends('layouts.plantilla')

@section('title', 'Editar | Usuario')

@section('content_header')
    <h1>Edita el usuario</h1>
@stop

@section('contenido')
<form action="/usuarios/{{$usuario->id}}" method="POST" class="needs-validation" novalidate>
    @csrf
    @method('PUT')
<div class="mb-3">
        <label for="" class="form-label"></label>
        <input type="number" class="form-control" id="id" name="id" placeholder="Numero de identificación" value="{{$usuario->id}}" required>
            <div class="valid-feedback">Campo Listo!</div>
            <div class="invalid-feedback">Campo Requerido*</div>
    </div>
    <div class="row g-3 mb-3">
        <div class="col">
            <input type="text" id="nombres" name="nombres" class="form-control" placeholder="Nombres" aria-label="First name" value="{{$usuario->nombres}}"required>
            <div class="valid-feedback">Campo Listo!</div>
            <div class="invalid-feedback">Campo Requerido*</div>
        </div>
        <div class="col">
            <input type="text" class="form-control" id="apellidos" name="apellidos" placeholder="Apellidos" aria-label="Last name" value="{{$usuario->apellidos}}"required>
            <div class="valid-feedback">Campo Listo!</div>
            <div class="invalid-feedback">Campo Requerido*</div>
        </div>
    </div>
    <div class="row g-3 mb-3">
        <div class="col">
            <input type="text" class="form-control" id="edad" name="edad" placeholder="Edad" aria-label="First name"value="{{$usuario->edad}}"required>
            <div class="valid-feedback">Campo Listo!</div>
            <div class="invalid-feedback">Campo Requerido*</div>
        </div>
        <div class="col">
            <input type="date" class="form-control "id="fechana" name="fechana" placeholder="Fecha de nacimiento" aria-label="Last name"value="{{$usuario->fechana}}"required>
        </div>
    </div>
    <!-- ---------------------------------------- -->
    <div class="row g-3 mb-3">
        <div class="col">
            <select class="form-select" aria-label="Default select example" id="carrera" name="carrera" value="{{$usuario->carrera}}"required>
                <option selected>Seleccionar carrera</option>
                <option value="Ingenieria de sistemas">Ingenieria de sistemas</option>
                <option value="Contaduria publica">Contaduria publica</option>
                <option value="Psicologia">Psicologia</option>
            </select>
            <div class="valid-feedback">Campo Listo!</div>
            <div class="invalid-feedback">Campo Requerido*</div>
        </div>
        <div class="col">
            <input type="text" class="form-control" id="rol" name="rol" value="Usuario" placeholder="Estudiante" aria-label="Last name" readonly value="{{$usuario->rol}}"required>
            <div class="valid-feedback">Campo Listo!</div>
            <div class="invalid-feedback">Campo Requerido*</div>
        </div>
    </div>
    <a href="/usuarios" class="btn btn-danger" tabindex="5">Cancelar</a>
    <button type="submit" class="btn btn-success" tabindex="4">Guardar</button>
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
