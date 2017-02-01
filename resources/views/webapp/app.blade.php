<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="fingerprint" content="">

    <!--<link rel="icon" href="../../favicon.ico">-->

    <title>@yield('titulo', 'SocialParse')</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('fonts/parse/style.css') }}" rel="stylesheet">
    <link href="{{ asset('fonts/iconmoon/style.css') }}" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <!--<link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">-->

    <!-- Custom styles for this template -->
    <link href="{{ asset('custom/addons.css') }}" rel="stylesheet">
    <link href="{{ asset('custom/dashboard.css') }}" rel="stylesheet">
    <link href="{{ asset('custom/dashboard-parse.css') }}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        .network-card {
            background: #fff;
            border-bottom: 1px solid #eeeeee;
            border-radius: 2px;
            padding: 10px 15px;
            margin-top: 0px;
        }
        .twitter-color{
            color: #00aced;
        }
        .facebook-color {
            color: #3b5998;
        }
        a:focus,
        a:hover{
            text-decoration: none;
        }
        a:focus {
            outline: none;
            outline-offset: 0;
        }
    </style>
</head>

<body>

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
            @include('webapp.layout.sidebar')
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            @yield('content')
        </div>
    </div>
</div>

@yield('modals')

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="{{ asset('addons/fingerprintjs2/fingerprint2.min.js') }}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="{{ asset('js/jquery.min.js') }}"><\/script>')</script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/webapp/main.js') }}"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<!--<script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>-->
@yield('js')
<script>
    if(typeof seccion !='undefined'){
        $(seccion).addClass('active');
    }
</script>
</body>
</html>