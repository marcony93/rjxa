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
        <script type="text/javascript" src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
        <script src="../resources/assets/js/jquery-3.1.0.min.js"></script>
        <script src="lib/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
        <script>
            new WOW().init();
        </script>
        <title>Nosotros</title>
    </head>
    <body>
        @section('menu')
        
        <div class="container wow fadeInDown">
        <div class="inner">
    <nav>
      <a href="/rjxa/public/" class="logo"><img src="img/logo.png"></a>
     
      <input type="checkbox" id="nav" /><label for="nav"></label>
    
      <ul>
          <li><a href="/rjxa/public/"><span class="fa fa-home fa-lg"></span>&nbsp;Inicio</a></li>
          <li><a href="/rjxa/public/conocenos"><span class="fa fa-tint fa-lg"></span>&nbsp;Conócenos</a></li>
          <li><a href="/rjxa/public/noticias"><span class="fa fa-folder"></span>&nbsp;Noticias</a></li>
          <li><a href="/rjxa/public/voluntariado"><span class="fa fa-user fa-lg"></span>&nbsp;Voluntariado</a></li>
          <li><a href="/rjxa/public/albumes"><span class="fa fa-picture-o fa-lg" aria-hidden="true"></span>&nbsp;Galería</a></li>
                        <!--<li><a href="/rjxa/public/contactanos"><span class="glyphicon glyphicon-envelope"></span>&nbsp;Contáctanos</a></li>!-->
           <li><a href="https://www.facebook.com/jovenesxagua/"><span class="fa fa-facebook-square fa-2x" aria-hidden="true"></span></a></li>
			        
			      </ul>	
        
    </nav>

        </div>
        </div>
            
        @show
        <div class="row">
            @yield('content')
        </div>
        
        
        
        
            <div class="row text-center fuenteAzul espacioArriba espacioAbajo wow pulse">
                <div class="col-lg-12">
                    <img src="img/logoMediano.png"><br>
                </div>  
               
			    <div class="col-lg-12 menuBajo menu  text-center">
			      <ul>
			            <li><a href="/rjxa/public/"><span class="fa fa-home fa-lg"></span>&nbsp;Inicio</a></li>
                        <li><a href="/rjxa/public/conocenos"><span class="fa fa-tint fa-lg"></span>&nbsp;Conócenos</a></li>
                        <li><a href="/rjxa/public/noticias"><span class="fa fa-folder"></span>&nbsp;Noticias</a></li>
                        <li><a href="/rjxa/public/voluntariado"><span class="fa fa-user fa-lg"></span>&nbsp;Voluntariado</a></li>
                        <li><a href="/rjxa/public/albumes"><span class="fa fa-picture-o fa-lg" aria-hidden="true"></span>&nbsp;Galería</a></li>
                        <!--<li><a href="/rjxa/public/contactanos"><span class="glyphicon glyphicon-envelope"></span>&nbsp;Contáctanos</a></li>!-->		        
			      </ul>			      
                </div>
                
                <!--<div class="col-lg-12 menu menuBajo">
                    <ul class="navbar-nav">
                        <li><a href="/rjxa/public/"><span class="fa fa-home"></span>&nbsp;Inicio</a></li>
                        <li><a href="/rjxa/public/conocenos"><span class="fa fa-tint"></span>&nbsp;Conócenos</a></li>
                        <li><a href="/rjxa/public/noticias"><span class="fa fa-folder"></span>&nbsp;Noticias</a></li
                        <li><a href="/rjxa/public/voluntariado"><span class="fa fa-user"></span>&nbsp;Voluntariado</a></li>
                        <li><a href="/rjxa/public/albumes"><span class="fa fa-picture-o"></span>&nbsp;Galería</a></li>
                        <li><a href="/rjxa/public/contactanos"><span class="glyphicon glyphicon-envelope"></span>&nbsp;Contáctanos</a></li>
                    </ul>
                </div>!-->
                <div class="col-lg-12">
                    <a href="https://www.facebook.com/jovenesxagua/"><i class="fa fa-facebook-square fa-lg" aria-hidden="true"></i>&nbsp;Síguenos en Facebook!</a>
                    <h4>Copyright © 2016 Red de Jóvenes por el Agua. Todos los Derechos Reservados</h4>
                </div>
            </div>
                    <script src="js/galeria.js"></script>
                    <script src="http://code.jquery.com/jquery-latest.js"></script>
                    <script src="js/menu.js"></script>
        
    </body>
</html>
