@extends('webapp.app')

@section('titulo', 'Twitter > Campañas')

@section('content')
    <style>
        .modal-open .modal {
            overflow-x: hidden;
            overflow-y: auto;
            background-image: url(https://dhlo3a0hhyb6o.cloudfront.net/v/ogugb6/img/icon-wizard/step-languages.svg);
            background-repeat: no-repeat;
            background-position: 0 50%;
            background-size: 30% auto;
        }
        .avatar-sm {
            width: 30px;
            height: 30px;
            margin-bottom: 2px;
            margin-top: 2px;
        }
        .vmiddle {
            vertical-align: middle!important;
        }
    </style>
    <div class="row app-head">
        <div class="col-md-12">
            <div class="row app-head-content" style="height: 70px; padding: 23px 20px;">
                <span class="title" style="font-size: 18px;">
                    Campañas de seguimiento en Twitter
                </span>
            </div>
        </div>
    </div>

    <div class="row no-main">
        <div class="col-md-12">
            <div class="row app-head-subcontent" style="padding-top: 10px; font-size: 15px;">
                Escoge el tipo de campaña de seguimiento que mejor se adapte a tu meta
            </div>
        </div>
    </div>

    <div class="row" style="margin-top: 40px;">
        <div class="col-md-4">
            <a href="#" data-toggle="modal" data-target="#selfProduct">
                <div class="thumbnail">
                    <img src="https://dhlo3a0hhyb6o.cloudfront.net/v/ogfqz8/img/icon-wizard/company2x.png" alt="...">
                    <div class="caption">
                        <h4 class="text-center">Mi empresa o producto</h4>
                        <p class="text-center">Recomendado para monitorear la presencia en línea de tu propia marca o producto.</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-4" data-toggle="modal" data-target="#competidor">
            <a href="#">
                <div class="thumbnail">
                    <img src="https://dhlo3a0hhyb6o.cloudfront.net/v/ogfqz8/img/icon-wizard/competitor2x.png" alt="...">
                    <div class="caption">
                        <h4 class="text-center">Competidor</h4>
                        <p class="text-center">Recomendado para monitorear la presencia de tu competidor. Seguro que ellos también lo hacen</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-4">
            <a href="#" data-toggle="modal" data-target="#anyThing">
                <div class="thumbnail">
                    <img src="https://dhlo3a0hhyb6o.cloudfront.net/v/ogfqz8/img/icon-wizard/custom2x.png" alt="...">
                    <div class="caption">
                        <h4 class="text-center">#Hashtags</h4>
                        <p class="text-center">Recomendado monitorear algún tema en particular o quizá de relevancia para ti.</p>
                        </br>
                    </div>
                </div>
            </a>
        </div>
    </div>
    <div class="row">
        <h3>Mis Campañas</h3>

        <table class="table table-bordered table-hover" style="margin-bottom: 100px;">
            <thead>
                <tr>
                    <th>Campaña</th>
                    <th>Community Managers</th>
                    <th>Estado</th>
                    <th style="width: 25px;"></th>
                </tr>
            </thead>
            <tbody>
            @foreach($campaigns as $campaign)
                <tr>
                    <td class="vmiddle">
                        <a href="{{ route('twitter.board', [$campaign->id, $campaign->alias]) }}">
                            {{ $campaign->alias }}
                        </a>
                    </td>
                    <td class="vmiddle">

                    </td>
                    <td class="vmiddle">
                        <span class="label {{ ($campaign->activo) ? 'label-success' : 'label-default' }}">
                            {{ ($campaign->activo) ? 'Activa' : 'Inactiva' }}
                        </span>
                    </td>
                    <td class="vmiddle text-center">
                        <a href="{{ route('twitter.dev.board', $campaign->id) }}" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Gestionar">
                            <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                        </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <!-- end row-->
@endsection

@section('modals')
    <div class="modal fade" id="selfProduct" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">¿A quién deseas seguir?</h4>
                </div>
                {!! Form::open(['route'=>'twitter.create.campaign', 'id'=>'formCreateCampaign']) !!}
                <div class="modal-body">
                    <p>Ingresa el nombre de la empresa o producto que quieres monitorear</p>
                        <div class="input-group form-group-lg">
                            <span class="input-group-addon" id="basic-addon1" style="color: #000;">https://twitter.com/</span>
                            {!! Form::text('trackusername', null, ['class'=>'form-control input-lg', 'placeholder'=>'Ej. NASA']) !!}
                        </div>
                    {!! Form::hidden('track', null, ['class'=>'trackusername']) !!}
                    {!! Form::hidden('tipo', 'username') !!}
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary hide" id="createTrackUsr">Crear campaña</button>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
    <div class="modal fade" id="competidor" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Monitorea a tu competencia</h4>
                </div>
                {!! Form::open(['route'=>'twitter.create.campaign', 'id'=>'formCreateCampaign']) !!}
                <div class="modal-body">
                    <p>Ingresa el nombre de la empresa o producto de la competenciar</p>
                    <div class="input-group form-group-lg">
                        <span class="input-group-addon" id="basic-addon1" style="color: #000;">https://twitter.com/</span>
                        {!! Form::text('trackother', null, ['class'=>'form-control input-lg', 'placeholder'=>'Ej. SpaceX']) !!}
                    </div>
                    {!! Form::hidden('track', null, ['class'=>'trackother']) !!}
                    {!! Form::hidden('tipo', 'username') !!}
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary hide" id="createTrackOther">Crear campaña</button>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
    <div class="modal fade" id="anyThing" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Monitorea un #hastag</h4>
                </div>
                {!! Form::open(['route'=>'twitter.create.campaign', 'id'=>'formCreateCampaign']) !!}
                <div class="modal-body">
                    <p>Ingresa el nombre de la empresa o producto de la competenciar</p>
                    <div class="input-group form-group-lg">
                        <span class="input-group-addon" id="basic-addon1" style="color: #000;">#</span>
                        {!! Form::text('trackhashtag', null, ['class'=>'form-control input-lg', 'placeholder'=>'Ej. selfie']) !!}
                    </div>
                    {!! Form::hidden('track', null, ['class'=>'trackhashtag']) !!}
                    {!! Form::hidden('tipo', 'hashtag') !!}
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary hide" id="createTrackHashtag">Crear campaña</button>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script>
        var typingTimer;
        var doneTypingInterval = 200;
        var $trackusr  = $('input[name=trackusername]');
        var $trackother= $('input[name=trackother]');
        var $trackhash = $('input[name=trackhashtag]');
        var $buttonUsr = $('#createTrackUsr');
        var $buttonOtr = $('#createTrackOther');
        var $buttonHas = $('#createTrackHashtag');

        $trackusr.on('keyup', function () {
            clearTimeout(typingTimer);
            typingTimer = setTimeout(doneTyping($trackusr, $buttonUsr, '@', $('.trackusername') ), doneTypingInterval);
        });
        $trackusr.on('keydown', function () {
            clearTimeout(typingTimer);
        });

        $trackother.on('keyup', function () {
            clearTimeout(typingTimer);
            typingTimer = setTimeout(doneTyping($trackother, $buttonOtr, '@', $('.trackother') ), doneTypingInterval);
        });
        $trackother.on('keydown', function () {
            clearTimeout(typingTimer);
        });

        $trackhash.on('keyup', function () {
            clearTimeout(typingTimer);
            typingTimer = setTimeout(doneTyping($trackhash, $buttonHas, '#', $('.trackhashtag') ), doneTypingInterval);
        });
        $trackhash.on('keydown', function () {
            clearTimeout(typingTimer);
        });

        function doneTyping (obj, btn, prefix, track) {
            var valor = obj.val().replace(/\s+/g, '').replace(/[^a-z0-9_ñÑ]+/gi, "");
            obj.val(valor);
            track.val(prefix+valor);
            if(valor==''){
                btn.addClass('hide');
            }else{
                btn.removeClass('hide');
            }
        }

        $(function () {
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>
@endsection