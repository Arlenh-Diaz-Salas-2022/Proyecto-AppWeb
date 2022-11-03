@extends('layouts.plantilla')

@section('title', 'Usuarios')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('contenido')
    <a href="usuarios/create" class="btn btn-primary">Crear</a>
    <table class="table table-success table-striped mt-4">
        <thead>
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
                            <a href="/usuarios/{{ $usuario->id }}/edit" class="btn btn-info">Editar</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Borrar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
