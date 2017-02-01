<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>ParseSocial</title>

    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        body {
            padding-top: 30px;
            padding-bottom: 40px;
            background-color: #f9fafa;
            font-family: 'Open Sans', 'Helvetica', sans-serif;
            -webkit-font-smoothing: antialiased;
            text-rendering: optimizeLegibility;
        }
        .bloqueado{
            max-width: 430px;
            padding: 30px;
            margin: 10% auto;
            border: 1px solid #eee;
            background: #fff;
            border-radius: 4px;
        }
    </style>
</head>

<body>

<div class="container">
    <div class="bloqueado">
        <h4>Desbloquea tu cuenta</h4>
        <p>
            Al parecer alguien más está usando tu cuenta desde otro lugar; Puedes cerrar sesión ó mantener activa la sesión en este dispositivo.
        </p>
        <div class="row">
            <div class="col-md-6 text-center">
                <a href="{{ route('account.locked', 'cerrar-sesion') }}" class="btn btn-danger">Cerrar mi sesión</a>
            </div>
            <div class="col-md-6 text-center">
                <a href="{{ route('account.locked', 'unlock-account') }}" class="btn btn-success">Desbloquear cuenta</a>
            </div>
        </div>
    </div>
</div> <!-- /container -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="{{ asset('js/jquery.min.js') }}"><\/script>')</script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
</html>