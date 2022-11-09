@extends('layouts.plantilla')

@section('title', 'Psicologo')

@section('content_header')
    <h1>Crear Psicologo</h1>
@stop

@section('contenido')
<form action="/psicologos" method="POST" class="needs-validation" novalidate>
    @csrf
<div class="mb-3">
        <label for="" class="form-label"></label>
        <input type="number" class="form-control" id="num_identificacion" name="num_identificacion" min="0" placeholder="Numero de identificación" required>
            <div class="valid-feedback">Campo Listo!</div>
            <div class="invalid-feedback">Campo Requerido* (No acepta numeros negativos)</div>
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
        <div class="col">
            <input type="number" class="form-control" id="telefono" name="telefono" min="1000000000" max="9999999999" placeholder="Numero de telefono" required>
                <div class="valid-feedback">Campo Listo!</div>
                <div class="invalid-feedback">Campo Requerido (10 caracteres)*</div>
        </div>
    </div>

    <div class="row g-3 mb-3">
        <div class="col">
            <input type="number" class="form-control" id="edad" name="edad" placeholder="Edad" min="0" required>
                <div class="valid-feedback">Campo Listo!</div>
                <div class="invalid-feedback">Campo Requerido* (No acepta numeros negativos)</div>
        </div>
        <div class="col">

            <input type="date" class="form-control "id="fechana" name="fechana" placeholder="Fecha de nacimiento" aria-label="Last name" required>
                <div class="valid-feedback">Campo Listo!</div>
                <div class="invalid-feedback">Campo Requerido*</div>
        </div>
    </div>
    <!-- ---------------------------------------- -->

    <a href="/psicologos" class="btn btn-danger" tabindex="5">Cancelar</a>
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
