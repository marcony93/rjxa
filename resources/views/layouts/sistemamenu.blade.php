<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="lib/bootstrap-3.3.7-dist/css/bootstrap.min.css"></link>
        <link rel="stylesheet" type="text/css" href="css/estilos.css"></link>
        <link rel="stylesheet" type="text/css" href="css/animate.css"></link>
        <link rel="stylesheet" ype="text/css" href="lib/font-awesome-4.7.0/css/font-awesome.min.css"></link>
        <script src="js/wow.min.js"></script>
        <script src="../resources/assets/js/jquery-3.1.0.min.js"></script>
        <script src="lib/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
        <script>
            new WOW().init();
        </script>
        <title>Nosotros</title>
    </head>
    <body>
        @section('menu')
        <div class="row menu wow fadeInDown">
            <div class="container">
                <div class="col-lg-1 text-left">
                    <img src="img/logo.png"/>
                </div>
                <div class="col-lg-11 text-right">
                    <ul>
                        <li><a href="/rjxa/public/"><span class="glyphicon glyphicon-home"></span>&nbsp;Inicio</a></li>
                        <li><a href="/rjxa/public/conocenos"><span class="glyphicon glyphicon-tint"></span>&nbsp;Conócenos</a></li>
                        <li><a href="/rjxa/public/noticias"><span class="glyphicon glyphicon-folder-open"></span>&nbsp;&nbsp;Noticias</a></li>
                        <li><a href="/rjxa/public/voluntariado"><span class="glyphicon glyphicon-user"></span>&nbsp;Voluntariado</a></li>
                        <li><a href="/rjxa/public/albumes"><span class="glyphicon glyphicon-picture"></span>&nbsp;Galería</a></li>
                        <li><a href="/rjxa/public/contactanos"><span class="glyphicon glyphicon-envelope"></span>&nbsp;Contáctanos</a></li>
                        <li><a href="https://www.facebook.com/jovenesxagua/"><i class="fa fa-facebook-square fa-2x" aria-hidden="true"></i></a></li>

                    </ul>
                </div>
            </div>
        </div>
        @show
        <div class="row">
            @yield('content')
        </div>
            <div class="row text-center fuenteAzul espacioArriba espacioAbajo wow pulse">
                <div class="col-lg-12">
                    <img src="img/logo.png">
                </div>
                <div class="col-lg-12">
                    <h4>Copyright © 2016 Red de Jóvenes por el Agua. Todos los Derechos Reservados</h4>
                </div>
            </div>
    </body>
</html>