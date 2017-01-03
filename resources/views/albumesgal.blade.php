
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
     <div class="row">
       <div class="col-md-12 text-center" id="galeria">

       </div>

    </div>

    <div class="row bloqueAzul">
        <div class="col-lg-12 text-center fuenteBlanca espacioArriba espacioAbajo">
            <div class="wow bounceInRight"><h2>¿Tienes alguna idea que consideres importante para la RJxA?</h2></div>
        <a href="https://goo.gl/VNFAPF"><button type="button" class="btn btn-warning btn-lg" aria-label="Left Align">
        Contáctate con nosotros!</button></a>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade bs-example-modal-lg" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-body" id="imagen">
              
              
          </div>
        </div>
      </div>
    </div>
    @endsection
