@extends('layouts.plantilla')

@section('title', 'Editar | Psicologo')

@section('content_header')
    <h1>Editar usuarios</h1>
@stop

@section('contenido')
<form action="/psicologos/{{$psicologo->id}}" method="POST" class="needs-validation" novalidate>
    @csrf
    @method('PUT')
    <div class="g-3 mb-3">
        <label for="" class="form-label"></label>
        <input type="number" class="form-control" id="id" name="id" placeholder="Numero de identificación" value="{{$psicologo->id}}" required>
        <div class="valid-feedback">Campo Listo!</div>
        <div class="invalid-feedback">Campo Requerido*</div>
    </div>

    <div class="row g-3 mb-3">
        <div class="col">
            <input type="text" id="nombres" name="nombres" class="form-control" placeholder="Nombres" aria-label="First name" value="{{$psicologo->nombres}}"required>
            <div class="valid-feedback">Campo Listo!</div>
            <div class="invalid-feedback">Campo Requerido*</div>
        </div>
        <div class="col">
            <input type="text" class="form-control" id="apellidos" name="apellidos" placeholder="Apellidos" aria-label="Last name" value="{{$psicologo->apellidos}}"required>
            <div class="valid-feedback">Campo Listo!</div>
            <div class="invalid-feedback">Campo Requerido*</div>
        </div>
    </div>
    <div class="row g-3 mb-3">
        <div class="col">
            <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Telefono" aria-label="First name"value="{{$psicologo->telefono}}" required>
            <div class="valid-feedback">Campo Listo!</div>
            <div class="invalid-feedback">Campo Requerido*</div>
        </div>

        <div class="col">
            <input type="text" class="form-control" id="edad" name="edad" placeholder="Edad de nacimiento" aria-label="First name"value="{{$psicologo->edad}}" required>
            <div class="valid-feedback">Campo Listo!</div>
            <div class="invalid-feedback">Campo Requerido*</div>
        </div>

        <div class="col">
            <input type="date" class="form-control "id="fechana" name="fechana" placeholder="Fecha de nacimiento" aria-label="Last name"value="{{$psicologo->fechana}}" required>
            <div class="valid-feedback">Campo Listo!</div>
            <div class="invalid-feedback">Campo Requerido*</div>
        </div>

    </div>
    <!-- ---------------------------------------- -->

    <a href="/psicologos" class="btn btn-danger" tabindex="5">Cancelar</a>
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
