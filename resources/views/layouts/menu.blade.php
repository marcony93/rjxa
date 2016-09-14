<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="lib/bootstrap-3.3.7-dist/css/bootstrap.min.css"></link>
        <link rel="stylesheet" type="text/css" href="css/estilos.css"></link>
        <link rel="stylesheet" type="text/css" href="css/animate.css"></link>
        <script src="../resources/assets/js/jquery-3.1.0.min.js"></script>
        <script src="lib/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
        <title>Nosotros</title>
    </head>
    <body>
        @section('menu')
        <div class="row menu">
            <div class="container">
                <div class="col-lg-1 text-left">
                    <img src="img/logo.png"/>
                </div>
                <div class="col-lg-11 text-right">
                    <ul>
                        <li><a href="">Inicio</a></li>
                        <li><a href="">Conócenos</a></li>
                        <li><a href="">Noticias</a></li>
                        <li><a href="">Voluntariado</a></li>
                        <li><a href="">Galeria</a></li>
                        <li><a href="">Contáctanos</a></li>
                    </ul>
                </div>
            </div>
        </div>
        @show
        <div class="row">
            @yield('content')
        </div>
        @section('footer')
        <div class="row text-center fuenteAzul espacioAbajo">
            <div class="col-lg-12">
                <img src="img/logoMediano.png">
            </div>
            <div class="col-lg-12 menu">
                <ul>
                    <li>Inicio</li>
                    <li>Conócenos</li>
                    <li>Noticias</li>
                    <li>Voluntariado</li>
                    <li>Galeria</li>
                    <li>Contáctanos</li>
                </ul>
            </div>
            <div class="col-lg-12">
                <h4>Copyright © 2016 Red de Jóvenes por el Agua. Todos los Derechos Reservados</h4>
            </div>
        </div>
        @show
    </body>
</html>