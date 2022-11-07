@extends('layouts.plantilla')

@section('title', 'Crear | Usuario')

@section('content_header')
    <h1>Crear usuarios</h1>
@stop

@section('contenido')
<form action="/usuarios" method="POST" class="needs-validation" novalidate>
    @csrf
<div class="mb-3">
        <label for="" class="form-label"></label>
        <input type="number" class="form-control" id="num_identificacion" name="num_identificacion" placeholder="Numero de identificación" required>
        <div class="valid-feedback">Campo Listo!</div>
        <div class="invalid-feedback">Campo Requerido*</div>
    </div>
    <div class="row g-3 mb-3">
        <div class="col">

            <input type="text" id="nombres" name="nombres" class="form-control" placeholder="Nombres" required>
            <div class="valid-feedback">Campo Listo!</div>
            <div class="invalid-feedback">Campo Requerido*</div>
        </div>
        <div class="col">

            <input type="text" class="form-control" id="apellidos" name="apellidos" placeholder="Apellidos" required>
            <div class="valid-feedback">Campo Listo!</div>
            <div class="invalid-feedback">Campo Requerido*</div>
        </div>
    </div>
    <div class="row g-3 mb-3">
        <div class="col">

            <input type="text" class="form-control" id="edad" name="edad" placeholder="Edad de nacimiento" required>
            <div class="valid-feedback">Campo Listo!</div>
            <div class="invalid-feedback">Campo Requerido*</div>
        </div>
        <div class="col">

            <input type="date" class="form-control "id="fechana" name="fechana" placeholder="Fecha de nacimiento" required>
            <div class="valid-feedback">Campo Listo!</div>
            <div class="invalid-feedback">Campo Requerido*</div>
        </div>
    </div>
    <!-- ---------------------------------------- -->
    <div class="row g-3 mb-3">
        <div class="col">
            <select class="form-select" aria-label="Default select example" id="carrera" name="carrera" required>
                <option  disabled selected >Seleccionar carrera</option>
                <option value="Ingenieria de sistemas">Ingenieria de sistemas</option>
                <option value="Contaduria publica">Contaduria publica</option>
                <option value="Psicologia">Psicologia</option>
            </select>
            <div class="valid-feedback">Campo Listo!</div>
            <div class="invalid-feedback">Campo Requerido*</div>
        </div>
        <div class="col">
            <input type="text" class="form-control" id="rol" name="rol" value="Usuario" placeholder="Estudiante"  readonly>
        </div>
    </div>
    <a href="/usuarios" class="btn btn-danger" tabindex="5">Cancelar</a>
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
