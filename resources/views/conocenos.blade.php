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
        <div class="col-lg-12 text-center fuenteAzul">
        <h2><span class="glyphicon glyphicon-list-alt"></span> Objetivos de la Red de Jóvenes por el Agua</h2><br>
        <h3>Objetivo General:</h3><br>
        <h4>Fomentar la participación juvenil centroamericana en la GIRH.</h4><br>
        <h3>Objetivos Especificos:</h3><br>
        <h4>OE1: Articular actores relevantes y aliados potenciales para trabajar en conjunto por la GIRH promoviendo la participación activa de <br>las juventudes en espacios políticos.<br><br>
        OE2: Fomentar la formación y el intercambio de experiencias, avances locales, nacionales y regionales con integrantes de la Red de Jóvenes por el Agua<br> en temas ambientales, económicos, políticos y sociales contribuyendo así a la construcción de conocimiento alrededor de la gestión del agua.<br><br>
        OE3: Sensibilizar y generar cambios positivos en el manejo de recursos hídricos involucrando a jóvenes en procesos de participación e<br> incidencia ciudadana en la conservación del recurso.
        </h4>
        </div>
    </div>
    <div class="row bloqueAzul">
        <div class="container espacioArriba espacioAbajo">
            <div class="col-lg-12 fuenteBlanca text-center wow bounceInRight">
            <h2><span class="glyphicon glyphicon-leaf"></span> Áreas Temáticas</h2><br></div>
            <div class="col-lg-6 fuenteBlanca text-center wow bounceInLeft">
                <h4>Cambio climático<br><br>
                    Gobernanza Ambiental<br><br>
                    Seguridad Alimentaria<br><br>
                    Educación y liderazgo</h4>
            </div>
            <div class="col-lg-6 fuenteBlanca text-center wow bounceInRight">
                <h4>Ecosistemas<br><br>
                    Ciencia y Tecnología<br><br>
                    Gestión Comunitaria</h4>
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
