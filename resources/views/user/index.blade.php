@extends('layouts.plantilla')

@section('title', 'Usuarios')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('contenido')
<div class="container">
      <div class="table_header">
        <h2>Usuarios</h2>
        <a href="usuarios/create" class="btn btn-primary" style=" box-shadow: 8px 8px 5px 0px rgba(219, 219, 219, 0.7490196078);" >Crear</a>
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
                        <td>{{$usuario->id}}</td>
                        <td>{{$usuario->nombres}}</td>
                        <td>{{$usuario->apellidos}}</td>
                        <td>{{$usuario->edad}}</td>
                        <td>{{$usuario->fechana}}</td>
                        <td>{{$usuario->carrera}}</td>
                        <td>{{$usuario->rol}}</td>
                        <td>
                            <form action="{{ route('usuarios.destroy',$usuario->id) }}" method="POST">
                                <a href="/usuarios/{{ $usuario->id }}/edit" class="btn btn-success" >Editar</a>
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
