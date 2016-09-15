<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>RJxA</title>
        <!-- Fonts -->

    </head>
    <body>
    @extends('layouts.menu')
    @section('menu')
    @parent
    <img class="imgCompleta wow slideInUp" src="img/banner.jpg">
    <div class="row espacioArriba espacioAbajo wow bounceInUp">
        <div class="col-lg-12 text-center espacioArriba espacioAbajo">
        <span class="glyphicon glyphicon-menu-down iconoGrande"></span>
        <h1 class="fuenteAzul">Red de Jóvenes por el Agua Centroamerica</h1>
    </div>
    </div>
    <div class="row bloqueAzul">
        <div class="container espacioArriba espacioAbajo">
            <div class="col-lg-6 fuenteBlanca espacioArriba espacioAbajo text-center wow bounceInLeft">
                <h2>Misión</h2>
                <p>Garantizar la participación de las juventudes en los procesos de la gestión integrada del recurso hídrico en la región centroamericana. </p>
            </div>
            <div class="col-lg-6 fuenteBlanca espacioArriba espacioAbajo text-center wow bounceInRight">
                <h2>Visión</h2>
                <p>Ser la Red Juvenil Líder que impulse la Gestión Integrada de Recursos Hídricos (GIRH) en Centroamérica. </p>
            </div>
        </div>
    </div>
    <div class="row">
        <img class="imgCompleta" src="img/voluntario.png">
        <div class="prueba fuenteBlanca">
        <h1>Forma parte de nuestro voluntariado!</h1>
        <h4>Genera cambios positivos para nuestro país desde la RJxA</h4>
        </div>
    </div>
    @endsection
    </body>
</html>
