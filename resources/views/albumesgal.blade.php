<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>RJxA</title>
        <link rel="stylesheet" href="fancyBox/source/jquery.fancybox.min.css" media="screen">
        <script src="fancyBox/source/jquery.fancybox.min.js"></script>
        <!-- Add jQuery library -->
        <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>

        <!-- Add mousewheel plugin (this is optional) -->
        <script type="text/javascript" src="/fancybox/lib/jquery.mousewheel-3.0.6.pack.js"></script>

        <!-- Add fancyBox -->
        <link rel="stylesheet" href="/fancybox/source/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
        <script type="text/javascript" src="/fancybox/source/jquery.fancybox.pack.js?v=2.1.5"></script>

        <!-- Optionally add helpers - button, thumbnail and/or media -->
        <link rel="stylesheet" href="/fancybox/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" type="text/css" media="screen" />
        <script type="text/javascript" src="/fancybox/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
        <script type="text/javascript" src="/fancybox/source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>

        <link rel="stylesheet" href="/fancybox/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" type="text/css" media="screen" />
        <script type="text/javascript" src="/fancybox/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>

    </head>
    <body>
    @extends('layouts.menu')
    @section('menu')
    @parent
    <div class="row bloqueAzul">
        <div class="container espacioArriba espacioAbajo">
            <div class="col-lg-12 fuenteBlanca text-center wow bounceInRight">
                <h1>Galería</h1>
            </div>
        </div>
    </div>

        
     <div class="row espacioArriba espacioAbajo fuenteAzul text-center wow bounceInLeft">
        <div class="col-lg-3">
            <a href="/rjxa/public/galeria"><h3>Conoce a nuestros miembros centroamericanos</h3></a>
        </div>
         <div class="col-lg-3">
             <a href="/rjxa/public/galdos"><h3>Encuentro Sudamericano de Jóvenes - Perú</h3></a>
        </div>
         <div class="col-lg-3">
             <a href="/rjxa/public/galtres"><h3>Marcha - Proyecto Caupolin</h3></a>
        </div>
         <div class="col-lg-3">
             <a href="/rjxa/public/galcuatro"><h3>Encuentro de Red de Jóvenes por el Agua, en Nicaragua</h3></a>
        </div>


     <div class="row" id="galeria">

    </div>

    <div class="row bloqueAzul">
        <div class="col-lg-12 text-center fuenteBlanca espacioArriba espacioAbajo">
            <div class="wow bounceInRight"><h2>¿Tienes alguna idea que consideres importante para la RJxA?</h2></div>
        <a href="https://goo.gl/VNFAPF"><button type="button" class="btn btn-warning btn-lg" aria-label="Left Align">
        Contáctate con nosotros!</button></a>
        </div>
    </div>

    @endsection
    </body>
</html>
