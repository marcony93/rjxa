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
    <img class="imgCompleta" src="img/banner.jpg">
    <div class="row espacioArriba espacioAbajo">
        <div class="col-lg-12 text-center">
        <span class="glyphicon glyphicon-menu-down iconoGrande"></span>
        <h1 class="fuenteAzul">Red de Jóvenes por el Agua Centroamerica</h1>
    </div>
    </div>
    <div class="row bloqueAzul">
        <div class="container espacioArriba espacioAbajo">
            <div class="col-lg-6 fuenteBlanca text-center">
                <h2>Misíon</h2>
                <p>Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T.persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original. </p>
            </div>
            <div class="col-lg-6 fuenteBlanca text-center">
                <h2>Visíon</h2>
                <p>Es un hecho establecido hace demasiado tiempo que un lector se distraerá con el contenido del texto de un sitio mientras que mira su diseño El punto de usar Lorem Ipsum es que tiene una distribución más o menos normal de las letras, al contrario de usar textos como por ejemplo "Contenido aquí, contenido aquí". </p>
            </div>
        </div>
    </div>
    <div class="row">
        <img class="imgCompleta" src="img/voluntario.png">
        <div class="prueba fuenteBlanca">
        <h1 >Forma parte de nuestro voluntariado</h1>
        <h4 >Es un hecho establecido hace demasiado tiempo que un lector se distraerá</h4>
        </div>
    </div>
    @endsection
    

    </body>
</html>
