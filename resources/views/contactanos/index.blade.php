<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>contactanos</title>
</head>
<body>
<img src="{{asset('img/baner.png')}}" alt="" style="width: 100%;">
<h2 style="text-align: center;color: green; ">E S C R I B E N O S</h2>
<form action="{{route('contactanos.store')}}" method="POST" class="needs-validation" novalidate>
@csrf
    <div class="container">
                <div class="row g-3 mb-3">
                    <div class="col">
                        <label for="name" class="form-label">Nombres</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder=". . ." required>
                        <div class="valid-feedback">Campo Listo!</div>
                        <div class="invalid-feedback">Campo Requerido*</div>
                    </div>
                    <div class="col">
                        <label for="surname" class="form-label">Apellidos</label>
                        <input type="text" id="surname" name="surname" class="form-control" placeholder=". . ." required>
                        <div class="valid-feedback">Campo Listo!</div>
                        <div class="invalid-feedback">Campo Requerido*</div>
                    </div>
                    <div class="col">
                        <label for="email" class="form-label">Correo electronico</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder=". . ." required>
                        <div class="valid-feedback">Campo Listo!</div>
                        <div class="invalid-feedback">Campo Requerido*</div>
                    </div>
                </div>
                <div class="row g-3 mb-3">
                    <div class="col">
                        <label for="textarea" class="form-label">Cuentanos</label>
                        <textarea type="textarea" class="form-control" id="textarea" name="textarea" placeholder=". . ." required></textarea>
                        <div class="valid-feedback">Campo Listo!</div>
                        <div class="invalid-feedback">Campo Requerido*</div>
                    </div>

                </div>
                <a href="/" class="btn btn-danger" tabindex="5" >Cancelar</a>
                <button type="submit" class="btn btn-success" tabindex="4">Enviar</button>
        </div>
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
</body>
</html>
