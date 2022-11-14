<?php
 $conexion = mysqli_connect('localhost','root','','appwebproyecto');
?>
<style>
    .content{
        background: url("{{ asset('img/logo-corposucre.png') }}");
        background-repeat: no-repeat;
        background-position: center;

    }

</style>
@extends('adminlte::page')

@section('title', 'Inicio')

@section('content_header')
    <h1>Estadisticas</h1>
@stop

@section('content')

<!-- <img src="{{ asset('img/logo-corposucre.png') }}" alt="" class="fondo"> -->
<div class="container" >
    <table class="table">
        <th class="col">
            <?php
                $spl="SELECT * from usuarios";
                $result = mysqli_query($conexion,$spl);
                $cont=0;
                while ($mostar=mysqli_fetch_array($result)) {
                    $cont = $cont + 1;
                }
            ?>
            <div class="card" style="width: 18rem;">
            <img src="{{ asset('img/user.svg') }}" style="width: 270px;" class="img-fluid d-block mx-auto">
            <div class="card-body">
                <h5 class="card-title">Usuarios registrados: <?php echo $cont ?></h5>
                <p class="card-text">Aqui se muestra la candidad de usuarios registrado por el administrados</p>
                <a href="/usuarios" class="btn btn-success">Ver mas</a>
            </div>
            </div>
        </th>
        <th class="col">
        <?php
                    $spli="SELECT * from psicologos";
                    $resulta = mysqli_query($conexion,$spli);
                    $conta=0;
                    while (mysqli_fetch_array($resulta)) {
                        $conta = $conta + 1;
                    }
                ?>
                <div class="card" style="width: 18rem;">
                <img src="{{ asset('img/psicologo.png') }}" style="width: 214px;" class="img-fluid d-block mx-auto">
                <div class="card-body">
                    <h5 class="card-title">Psicologos registrados: <?php echo $conta ?></h5>
                    <p class="card-text">Aqui se muestra la candidad de psicologos registrado por el administrados</p>
                    <a href="/psicologos" class="btn btn-success">Ver mas</a>
                </div>
                </div>
        </th>
    </table>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
@stop

@section('js')
    <script src="https://kit.fontawesome.com/8f698f9c7f.js" crossorigin="anonymous"></script>
@stop
