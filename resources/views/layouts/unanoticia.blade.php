@section('unanoticia')

<div class="container">
@if(isset($noticia))
    
   
   <div class="col-xs-12 col-sm-6">
<div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title">{{$noticia->titulo}}</h3>
    </div>
  <div class="panel-body">
    <img src="imgNoticias/{{$noticia->urlImg}}" class="img img-responsive">
    <p>{{$noticia->descripcion}}</p>
  </div>
  <div class="panel-footer"><a href="/rjxa/public/detalle">Leer más</a></div>
</div>
        
</div>
    
@endif

</div>



@show