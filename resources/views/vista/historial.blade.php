@extends('layouts.plantilla')

@section('title', 'historial')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('contenido')
<div class="container">
      <div class="table_header">
        <h2>Historial</h2>

      </div>
    <div class="table-responsive">
        <table class="table  table-striped table-hover">
            <thead class="table-light">
                <tr>
                    <th scope="col">Identificación</th>
                    <th scope="col">Nombres</th>
                    <th scope="col">Apellidos</th>
                    <th scope="col">Rol</th>
                    <th scope="col">Edad</th>
                    <th scope="col">Tipo de atención</th>
                    <th scope="col">Profesional</th>
                    <th scope="col">Dia disponible</th>
                    <th class="col">Hora disponible</th>
                </tr>
            </thead>
            <tbody>
                @foreach($historial as $historials )
                    <tr>
                        <td>{{$historials->num_identificacion}}</td>
                        <td>{{$historials->nombres}}</td>
                        <td>{{$historials->apellidos}}</td>
                        <td>{{$historials->rol}}</td>
                        <td>{{$historials->edad}}</td>
                        <td>{{$historials->tipo_atencion}}</td>
                        <td>{{$historials->profecinal}}</td>
                        <td>{{$historials->dia_disponible}}</td>
                        <td>{{$historials->hora_disponible}}</td>
                        <td>
                            <form action="{{ route('historial.destroy',$historials->id) }}" method="POST">
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
