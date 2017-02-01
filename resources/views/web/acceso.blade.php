<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SocialParse</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/login.css') }}" rel="stylesheet">
    <style>
        /*body {
            width: 100%;
            height: 100%;
            background-image: url({{ asset('media/backgrounds/patternSocial.png') }});
            background-repeat: repeat;
        }*/
    </style>
</head>
<body>
<div class="container" style="padding-top: 10%;">

    {!! Form::open(['route'=>'auth.acceso', 'class'=>'form-signin visible-scale']) !!}
        <div class="col-md-12 text-center">
            <img src="{{ asset('media/brand/loginlogo.png') }}">
        </div>
        <label for="inputEmail" class="sr-only">Email address</label>
        {!! Form::text('email', null, ['class'=>'form-control', 'placeholder'=>'Correo electrónico']) !!}
        <label for="inputPassword" class="sr-only">Password</label>
        {!! Form::password('password', ['class'=>'form-control', 'placeholder'=>'Contraseña']) !!}
    <!--<div class="checkbox">
                    <label>
                        <input type="checkbox" value="remember-me"> Remember me
                    </label>
                </div>-->
        {!! Form::hidden('fingerprint', $fingerprint) !!}
        <button class="btn btn-lg btn-success btn-block" type="submit">Acceder</button>

    {!! Form::close() !!}

    <div class="col-md-12 text-center" style="margin-top: 15px;">
        <a href="{{ route('web.registro') }}">
            Crear una cuenta
        </a>
    </div>
</div> <!-- /container -->
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
</html>