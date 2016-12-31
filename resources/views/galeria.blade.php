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
            <div class="col-lg-12 fuenteBlanca text-center wow bounceInLeft">
                <h1>Galería</h1>
            </div>
        </div>
    </div>

<div class="container">
	<div class="row espacioArriba espacioAbajo">
		<div class='list-group gallery'>
            <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                <a class="thumbnail fancybox" rel="ligthbox" href="http://placehold.it/300x320.png">
                    <img class="img-responsive" alt="" src="http://placehold.it/320x320" />
                    <div class='text-right'>
                        <small class='text-muted'>Image Title</small>
                    </div> <!-- text-right / end -->
                </a>
            </div> <!-- col-6 / end -->
            <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                <a class="thumbnail fancybox" rel="ligthbox" href="http://placehold.it/300x320.png">
                    <img class="img-responsive" alt="" src="http://placehold.it/320x320" />
                    <div class='text-right'>
                        <small class='text-muted'>Image Title</small>
                    </div> <!-- text-right / end -->
                </a>
            </div> <!-- col-6 / end -->
            <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                <a class="thumbnail fancybox" rel="ligthbox" href="http://placehold.it/300x320.png">
                    <img class="img-responsive" alt="" src="http://placehold.it/320x320" />
                    <div class='text-right'>
                        <small class='text-muted'>Image Title</small>
                    </div> <!-- text-right / end -->
                </a>
            </div> <!-- col-6 / end -->
            <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                <a class="thumbnail fancybox" rel="ligthbox" href="http://placehold.it/300x320.png">
                    <img class="img-responsive" alt="" src="http://placehold.it/320x320" />
                    <div class='text-right'>
                        <small class='text-muted'>Image Title</small>
                    </div> <!-- text-right / end -->
                </a>
            </div> <!-- col-6 / end -->
            <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                <a class="thumbnail fancybox" rel="ligthbox" href="http://placehold.it/300x320.png">
                    <img class="img-responsive" alt="" src="http://placehold.it/320x320" />
                    <div class='text-right'>
                        <small class='text-muted'>Image Title</small>
                    </div> <!-- text-right / end -->
                </a>
            </div> <!-- col-6 / end -->
            <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                <a class="thumbnail fancybox" rel="ligthbox" href="http://placehold.it/300x320.png">
                    <img class="img-responsive" alt="" src="http://placehold.it/320x320" />
                    <div class='text-right'>
                        <small class='text-muted'>Image Title</small>
                    </div> <!-- text-right / end -->
                </a>
            </div> <!-- col-6 / end -->
        </div> <!-- list-group / end -->
	</div> <!-- row / end -->
</div> <!-- container / end -->


    <div class="row bloqueAzul">
        <div class="col-lg-12 text-center fuenteBlanca espacioArriba espacioAbajo">
        <h1>¿Te animas a formar parte de nuestro voluntariado?</h1>
        <h4>Sé parte de la Red de Jóvenes por el Agua desde ya!</h4>
        <a href="https://goo.gl/VNFAPF"><button type="button" class="btn btn-warning btn-lg" aria-label="Left Align">
        Sí, me animo!</button></a>
        </div>
    </div>

    @endsection
    </body>
</html>
