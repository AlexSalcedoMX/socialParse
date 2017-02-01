@extends('webapp.app')

@section('titulo', 'Dashboard')

@section('content')
    <style>
        .verificado{
            font-size: 9px;
            position: absolute;
            left: 20px;
            bottom: 25px;
        }
    </style>
    <div class="row app-head">
        <div class="col-md-12">
            <div class="row app-head-content" style="height: 70px; padding: 23px 20px;">
                <span class="title" style="font-size: 18px;">
                    Redes sociales
                </span>
            </div>
        </div>
    </div>

    <div class="row no-main">
        <div class="col-md-12">
            <div class="row app-head-subcontent" style="padding-top: 10px; font-size: 15px;">
                Visualiza y gestiona facilmente todas tus redes sociales.
            </div>
        </div>
    </div>

    <div class="row" style="margin-top: 40px;">
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <a href="{{ route('auth.twitter') }}" class="btn btn-outline-primary btn-xs pull-right" style="margin-top: -2px;">
                        Agregar cuenta
                    </a>
                    <h3 class="panel-title">
                        <i class="fa fa-twitter twitter-color"></i> Twitter
                    </h3>
                </div>
                <div class="panel-body panel-body-v01">
                    @foreach($cuentasTw as $twitter)

                    <div class="media network-card">
                        <div class="media-left">
                            @if($twitter->verificado)
                            <span class="fa fa-stack verificado">
                                <i class="fa fa-certificate fa-stack-2x"></i>
                                <i class="fa fa-check fa-stack-1x fa-inverse"></i>
                            </span>
                            @endif
                            <a href="#">
                                <img class="media-object" src="{{ $twitter->avatar }}" style="width: 40px; height: 40px; border-radius: 3px;">
                            </a>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading" style="font-size: 16px;">
                                {{ $twitter->nombre }}
                            </h4>
                            <span style="font-size: 12px;">
                                {{ '@'.$twitter->usuario }}
                            </span>
                        </div>
                        <div class="media-right media-middle">
                            <a href="#" class="btn btn-default">
                                <i class="im im-cog" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <a href="" class="btn btn-outline-primary btn-xs pull-right" style="margin-top: -2px;">
                        Agregar cuenta
                    </a>
                    <h3 class="panel-title">
                        <i class="fa fa-facebook-official facebook-color"></i> Facebook
                    </h3>
                </div>
                <div class="panel-body panel-body-v01">
                    <div class="media network-card">
                        <div class="media-left">
                            <a href="#">
                                <img class="media-object" src="https://basedeploy.com/assets/brands/parse-6b9444391e7192f8269875c88be07f20b053f1927e2fab38b551b4803b3a1020.png" style="width: 40px; height: 40px; border-radius: 3px;">
                            </a>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading" style="font-size: 16px;">
                                Social Parse
                            </h4>
                            <span style="font-size: 12px;">
                                    @SocialParse
                                </span>
                        </div>
                        <div class="media-right media-middle">
                            <a href="#" class="btn btn-default">
                                <i class="im im-cog" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <i class="fa fa-flag fa-flip-horizontal" style="color: #f48009;"></i> Páginas Facebook
                    </h3>
                </div>
                <div class="panel-body panel-body-v01">
                    <div class="media network-card">
                        <div class="media-left">
                            <a href="#">
                                <img class="media-object" src="https://basedeploy.com/assets/brands/parse-6b9444391e7192f8269875c88be07f20b053f1927e2fab38b551b4803b3a1020.png" style="width: 40px; height: 40px; border-radius: 3px;">
                            </a>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading" style="font-size: 16px;">
                                Social Parse
                            </h4>
                            <span style="font-size: 12px;">
                                    @SocialParse
                                </span>
                        </div>
                        <div class="media-right media-middle">
                            <a href="#" class="btn btn-default">
                                <i class="im im-cog" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end row-->
@endsection

@section('js')
    <script>
        var seccion = '#link-redes-sociales';
    </script>
@endsection