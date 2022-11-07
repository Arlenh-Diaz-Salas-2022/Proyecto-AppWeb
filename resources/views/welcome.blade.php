<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/bienvenido.css')}}">
    <script src="https://kit.fontawesome.com/8f698f9c7f.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>AppWeb</title>
</head>
<body>
<img src="{{asset('img/Bienvenidos.png')}}" alt="" class="baner">
    <div class="container-fluid">
        <div class="row ">
            <div class="col" id="boton" name="boton">
                <a type="button" class="btn btn-danger" href="/login"><i class="fa-solid fa-user-tie"></i> Administrador</a>
            </div>
            <div class="col" id="boton">
                <a type="button" class="btn btn-success"><i class="fa-regular fa-user"></i> Usuario</a>
            </div>
        </div>
    </div>
</body>
</html>
