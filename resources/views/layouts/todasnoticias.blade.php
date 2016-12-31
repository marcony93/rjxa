@section('todasnoticias')

<div class="container">
@if(isset($noticias))
    
    @foreach($noticias as $n)
   <div class="col-xs-12 col-sm-6">
<div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title">{{$n->titulo}}</h3>
    </div>
  <div class="panel-body">
    <img src="imgNoticias/{{$n->urlImg}}" class="img img-responsive">
    <p>{{$n->updated_at}}</p>
  </div>
  <div class="panel-footer"><a href="/detalle">Leer más</a></div>
</div>
        
</div>
    @endforeach
@endif

</div>



@show