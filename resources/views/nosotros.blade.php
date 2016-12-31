<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>RJxA</title>

    </head>
    <body>
    @extends('layouts.menu')
    @section('menu')
    @parent    
    <div class="row bloqueAzul">
        <div class="container espacioArriba espacioAbajo">
            <div class="col-lg-12 fuenteBlanca text-center wow bounceInLeft">
                <h2>Noticias</h2>
                <!--<img src="..." alt="..." class="img-rounded">
                <img src="..." alt="..." class="img-rounded">
                <img src="..." alt="..." class="img-rounded">-->
            </div>
        </div>
    </div>
        
    <div class="row">
        <div class="container espacioArriba espacioAbajo">
            <div class="col-lg-12 fuenteBlanca text-center wow bounceInLeft">
                <h2>Noticias</h2>
                <!--<img src="..." alt="..." class="img-rounded">
                <img src="..." alt="..." class="img-rounded">
                <img src="..." alt="..." class="img-rounded">-->
            </div>
        </div>
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