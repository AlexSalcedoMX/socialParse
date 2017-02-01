<div id="brandWrapper" class="row">
    <!-- <div class="col-md-12">
         <img src="https://www.moosend.com/wp-content/themes/moosend_theme/images/moosend_logo_full.svg" alt="">
     </div>-->
    <div class="col-md-12">
        <div class="media">
            <div class="media-left media-middle">
                <a href="#">
                    <img class="media-object" src="https://basedeploy.com/assets/brands/parse-6b9444391e7192f8269875c88be07f20b053f1927e2fab38b551b4803b3a1020.png" style="width: 50px; height: 50px;">
                </a>
            </div>
            <div class="media-body in-middle">
                <h4 class="media-heading brand-name">Social Parse</h4>
            </div>
        </div>
    </div>
</div>
<ul class="nav nav-sidebar">
    <li id="link-dashboard">
        <a href="{{ route('webapp.index') }}">
            <i class="fa fa-globe"></i> Dashboard
        </a>
    </li>
    <li>
        <a href="#twitterSidebar" data-toggle="collapse" expanded="false">
            <i class="fa fa-chevron-right pull-right" aria-hidden="true"></i>
            <i class="fa fa-twitter"></i> Twitter
        </a>
    </li>
    <div class="collapse" id="twitterSidebar">
        <div class="submenu">
            <ul>
                <li id="link-twitter-campanias">
                    <a href="{{ route('twitter.campaigns') }}">
                        <i class="fa fa-hashtag" aria-hidden="true"></i> Campañas
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-user-circle-o"></i> Perfiles
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-wrench" aria-hidden="true"></i> Configuración
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <li>
        <a href="#facebookSidebar" data-toggle="collapse" expanded="false">
            <i class="fa fa-chevron-right pull-right" aria-hidden="true"></i>
            <i class="fa fa-facebook-official"></i>
            Facebook
        </a>
    </li>
    <div class="collapse" id="facebookSidebar">
        <div class="submenu">
            <ul>
                <li>
                    <a href="#">
                        <i class="fa fa-user-circle-o"></i> Perfiles
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-flag fa-flip-horizontal"></i> Páginas
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-wrench" aria-hidden="true"></i> Configuración
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <li>
        <a href="#">
            <i class="parse parse-users-solid"></i> Community Managers
        </a>
    </li>
    <li>
        <a href="#">
            <i class="fa fa-trello"></i> Tableros
        </a>
    </li>
    <li id="link-redes-sociales">
        <a href="{{ route('webapp.redesSociales') }}">
            <i class="fa fa-bolt" aria-hidden="true"></i> Redes sociales
        </a>
    </li>
</ul>

<ul class="nav nav-sidebar">
    <li>
        <a href="">
            <i class="fa fa-usd"></i> Créditos
        </a>
    </li>
    <li>
        <a href="">
            <i class="fa fa-bookmark"></i> Mi cuenta
        </a>
    </li>
    <li>
        <a href="{{ route('webapp.logout') }}">
            <i class="parse parse-x-outline"></i> Cerrar sesión
        </a>
    </li>
</ul>