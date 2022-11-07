@extends('layouts.plantilla')

@section('title', 'Psicologos')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('contenido')
<div class="container">
      <div class="table_header">
        <h2>Psicologos</h2>
        <a href="psicologos/create" class="btn btn-primary" style=" box-shadow: 8px 8px 5px 0px rgba(219, 219, 219, 0.7490196078);" >Crear</a>
      </div>
    <div class="table-responsive">
        <table class="table  table-striped table-hover">
            <thead class="table-light">
                <tr>
                    <th scope="col">Identificación</th>
                    <th scope="col">Nombres</th>
                    <th scope="col">Apellidos</th>
                    <th scope="col">Telefonno</th>
                    <th scope="col">Edad</th>
                    <th scope="col">Fecha de nacimiento</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($psicologos as $psicologo)
                    <tr>
                        <td>{{$psicologo->num_identificacion}}</td>
                        <td>{{$psicologo->nombres}}</td>
                        <td>{{$psicologo->apellidos}}</td>
                        <td>{{$psicologo->telefono}}</td>
                        <td>{{$psicologo->fechana}}</td>
                        <td>{{$psicologo->edad}}</td>
                        <td>
                            <form action="{{ route('psicologos.destroy',$psicologo->id) }}" method="POST">
                                <a href="/psicologos/{{ $psicologo->id }}/edit" class="btn btn-success" >Editar</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" >Borrar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
@section('css')
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
@stop
