
    @extends('layouts.menu')
    @section('menu')
    @parent
    <div class="contenedor">
    <img class="imgCompleta wow slideInUp" src="img/banner.jpg">
    <div class="row espacioArriba espacioAbajo wow bounceInDown">
        <div class="col-lg-12 text-center espacioArriba espacioAbajo">
        <span class="glyphicon glyphicon-menu-down iconoGrande"></span>
        <h1 class="fuenteAzul ">Red de Jóvenes por el Agua Centroamérica</h1>
        <h3 class="fuenteAzul">"Actuando hoy, asegurando el futuro"</h3>
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
        <img class="imgCompleta" src="img/voluntariado.jpg">
        <div class="prueba">
            <div class="text-center espacioArriba espacioAbajo">
            <div class="wow bounceInLeft"><h1>Forma parte de nuestro voluntariado!</h1></div>
            <div class="wow bounceInRight"><h4>Genera cambios positivos para nuestro país desde la RJxA</h4></div>
            <a href="conocenos"><button type="button" class="btn btn-warning btn-lg" aria-label="Left Align">Conócenos ahora!</button></a>
            </div>
        </div>
    </div>
    </div>
    @endsection
