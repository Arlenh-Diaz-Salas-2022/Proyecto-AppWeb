<x-guest-layout>
<!doctype html>
<html>
    <head>
        <link rel="shortcut icon" href="#" />
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>AppWeb</title>

        <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/estilos.css')}}">
        <link rel="stylesheet" href="{{asset('plugins/sweetalert2/sweetalert2.min.css')}}">

        <link rel="stylesheet" type="text/css" href="{{ asset('iconic/css/material-design-iconic-font.min.css') }}">

    </head>

    <body>
      <div class="container-login">
        <div class="wrap-login">
        <img src="{{ asset('img/logo-corposucre.png') }}" style="width: 300px; height: 204px; margin-top: -70px;" alt="" sizes="" srcset="" >
            <form class="login-form validate-form" id="formLogin" action="{{ route('login') }}" method="post">
            @csrf

                <!-- <span class="login-form-title">INICIAR SESION</span> -->

                <div class="wrap-input100" data-validate = "Usuario incorrecto">
                    <input class=" form-control input100" type="email" id="email" name="email" placeholder="Correo Electronico" :value="old('email')">
                    <span class="focus-efecto"></span>
                </div>

                <div class="wrap-input100" data-validate="Password incorrecto">
                    <input class="form-control input100" type="password" id="password" name="password" placeholder="Contraseña">
                    <span class="focus-efecto"></span>
                </div>
                <div class="row g-3 mb-3">
                    <div class="col">
                        <label for="remember_me" class="flex items-center">
                            <x-jet-checkbox id="remember_me" name="remember" />
                            <span class="ml-2 text-sm text-gray-600">{{ __('Acuerdate de mi') }}</span>
                        </label>
                    </div>
                    <div class="col">
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Registrate</a>
                        @endif
                    </div>
                </div>
                <!-- <div class="block mt-4">
                    <label for="remember_me" class="flex items-center">
                        <x-jet-checkbox id="remember_me" name="remember" />
                        <span class="ml-2 text-sm text-gray-600">{{ __('Acuerdate de mi') }}</span>
                    </label>
                </div>
                <div class="block mt-4">
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                    @endif
                </div> -->
                <div class="container-login-form-btn">
                    <div class="wrap-login-form-btn">
                        <div class="login-form-bgbtn"></div>
                        <button type="submit" name="submit" class="login-form-btn">INICIAR SESION</button>
                    </div>
                </div>
            </form>
        </div>
    </div>


     <script src="{{ asset('jquery/jquery-3.3.1.min.js')}}"></script>
     <script src="{{ asset('bootstrap/js/bootstrap.min.js')}}"></script>
     <script src="{{ asset('popper/popper.min.js')}}"></script>

     <script src="{{ asset('plugins/sweetalert2/sweetalert2.all.min.js')}}"></script>
     <!-- <script src="{{ asset('js/codigo.js')}}"></script> -->
    </body>
</html>
</x-guest-layout>
