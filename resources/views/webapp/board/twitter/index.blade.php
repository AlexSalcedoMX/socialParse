@extends('webapp.board.layouts.appTw')

@section('titulo', $campaign->alias)

@section('content')
    <style>
        .avatar {
            width: 50px;
            height: 50px;
            border-radius: 5px;
        }
        .nombre {
            font-size: 15px;
            font-weight: bold;
            color: #292f33;
        }
        .usuario {
            color: #8899a6;
            font-size: 13px;
        }
        .tweet-card {
            background: #fff;
            border-left: 1px solid #e1e8ed;
            border-right: 1px solid #e1e8ed;
            border-bottom: 1px solid #e1e8ed;
            padding: 5px 15px;
            margin-top: 0;
        }
        .tweet-card:hover{
            background-color: #f5f8fa;
        }
        .tweet-text {
            font-size: 14px;
            line-height: 18px;
            color: #292f33;
        }
    </style>
    <div class="col-md-2">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae cumque, doloribus earum eos harum mollitia nobis porro! Blanditiis doloremque et fugiat maiores minima pariatur quo reiciendis tempore unde voluptates. Reprehenderit!
    </div>
    <div class="col-md-5">
        <div class="media tweet-card">
            <a href="#">
                <div class="media-left">
                    <img class="media-object avatar" src="https://pbs.twimg.com/profile_images/824478768613830656/DsS8R3B1_bigger.jpg" alt="...">
                </div>
                <div class="media-body">
                    <span class="nombre">Rogue POTUS Staff</span>
                    <span class="usuario">@RoguePOTUSStaff</span>
                    <p class="tweet-text">Priebus points out to POTUS that having sons in front row undermines appearance that POTUS is separated from business activities.</p>
                </div>
            </a>
        </div>
    </div>
    <div class="col-md-5">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae blanditiis eos est hic illo itaque, iure molestias nesciunt quasi sed. Eum excepturi explicabo fugiat inventore itaque porro quas ullam vitae?
    </div>
@endsection