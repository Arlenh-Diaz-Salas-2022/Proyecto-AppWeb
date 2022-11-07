@extends('layouts.plantilla')

@section('title', 'Citas')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('contenido')
<div class="container">
      <div class="table_header">
        <h2>Citas</h2>
        <a href="/historial" class="btn btn-primary" style=" box-shadow: 8px 8px 5px 0px rgba(219, 219, 219, 0.7490196078);" >Historial</a>
      </div>
    <div class="table-responsive">
        <table class="table  table-striped table-hover">
            <thead class="table-light">
                <tr>
                    <th scope="col">Identificación</th>
                    <th scope="col">Nombres</th>
                    <th scope="col">Apellidos</th>
                    <th scope="col">Edad</th>
                    <th scope="col">Fecha de nacimiento</th>
                    <th scope="col">Carrera</th>
                    <th scope="col">Rol</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($usuarios as $usuario)
                    <tr>
                        <td>{{$usuario->num_identificacion}}</td>
                        <td>{{$usuario->nombres}}</td>
                        <td>{{$usuario->apellidos}}</td>
                        <td>{{$usuario->edad}}</td>
                        <td>{{$usuario->fechana}}</td>
                        <td>{{$usuario->carrera}}</td>
                        <td>{{$usuario->rol}}</td>
                        <td>
                            <form action="{{ route('citas.destroy',$usuario->id) }}" method="POST">
                                @csrf
                                <a href="/citas/{{ $usuario->id }}/edit" class="btn btn-success" >Crear cita</a>
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
