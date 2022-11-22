<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" style="height: 100%">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Biodefensa App</title>
        <link rel="shortcut icon" href="{{ url('/') }}/img/favicon.png">

        <!-- Styles -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        <!-- Mis Estilos -->
        <link href="{{url('/css/mystyle.css')}}" rel="stylesheet">
        <!-- Boostrap -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <!-- Axios -->
	    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
        <style>
            body{
                background: url("{{ url('/') }}/img/fondo.jpg");
                background-position: center; /* Center the image */
                background-repeat: no-repeat; /* Do not repeat the image */
                background-size: cover;
            }
        </style>
    </head>
    <body class="h-100 d-flex justify-content-center align-items-center">
        <div class="card bg-white text-black m-2">
            <div class="row m-0">
                <div class="col-12 col-sm-6 p-0" align="center">
                    <img src="{{url('/img/LogoBiodefensa.jpg')}}" style="max-width:100%;padding:1rem;max-height:350px;">
                </div>
                <div class="col-12 col-sm-6 p-0">
                    <div class="card-body">
                        <form action="{{url('sesion/login')}}" method="POST">
                            {{ csrf_field() }}
                            <h4 class="card-title" align="center">Iniciar Sesión</h4>
                            <div class="mb-3">
                                <label for="login-email" class="form-label">E-mail</label>
                                <input type="email" name="email" class="form-control" id="login-email" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-5">
                                <label for="login-password" class="form-label">Contraseña</label>
                                <input type="password" name="password" class="form-control" id="login-password" aria-describedby="emailHelp">
                            </div>
                            <button type="submit" class="btn btn-success w-100">
                                <i class="material-icons">send</i> Ingresar
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
