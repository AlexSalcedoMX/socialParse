<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inscripción</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/registro.css') }}" rel="stylesheet">
</head>
<body>
<div class="container" style="padding-top: 1%;">

    {!! Form::open(['route'=>'auth.registro', 'class'=>'form-signin visible-scale']) !!}
        <div class="row" style="margin-bottom: 15px;">
            <div class="col-md-12 text-center">
                <img src="{{ asset('media/brand/loginlogo.png') }}">
            </div>
            <div class="col-md-12 text-center" style="margin-bottom: 15px;">
                <span class="smaller">
                    Estás a solo un minuto de tu primera mención ¡Si, lo hemos cronometrado!
                </span>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    {!! Form::label('email', 'Regístrate con tu correo electrónico *') !!}
                    {!! Form::text('email', null, ['class'=>'form-control', 'placeholder'=>'luke.s@rebels.io']) !!}
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    {!! Form::label('password', 'Elige una contraseña *') !!}
                    {!! Form::password('password', ['class'=>'form-control', 'placeholder'=>'Tatooine6293*-']) !!}
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    {!! Form::label('nombre', 'Nombre *') !!}
                    {!! Form::text('nombre', null, ['class'=>'form-control', 'placeholder'=>'Luke']) !!}
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    {!! Form::label('apellidos', 'Apellidos *') !!}
                    {!! Form::text('apellidos', null, ['class'=>'form-control', 'placeholder'=>'Skywalker']) !!}
                </div>
            </div>
            <div class="col-md-12">
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="tos" value="1"> Acepto lo términos y condiciones del servicio.
                    </label>
                </div>
            </div>
        </div>
        <button class="btn btn-lg btn-success btn-block" type="submit">Crear mi cuenta</button>
        {!! Form::hidden('fingerprint', $fingerprint) !!}
    {!! Form::close() !!}

</div> <!-- /container -->
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
</html>