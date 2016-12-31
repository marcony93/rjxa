@section('tabla')
<div class="table-responsive">
<table class="table table-responsive table-hover">
<caption>Registros de noticias</caption>
 
    
    <thead>
        <tr>
        <th scope="col">Título</th>
        <th scope="col">Descripción</th>
        <th scope="col">Imagen</th>
        <th scope="col">Botones</th>
        </tr>
    </thead>
    
    <tbody>
         @if(isset($noticias))
        @foreach($noticias as $n)
        <tr>
            <td scope="row">{{ $n->titulo }}</td>
            <td scope="row">{{ $n->descripcion}}</td>
            <td scope="row">
            <img src="imgNoticias/{{$n->urlImg}}" class="img-responsive" alt="..." class="img-rounded" style="max-width:100px;">
            </td>
            
            <td scope="row">
                
            <a href="noticiaspanel/{{$n->id}}/edit " class="btn btn-warning btn-xs">Modificar</a>
            <form action="{{route('noticiaspanel.destroy', $n->id )}}" method="POST">
            <input name="_method" type="hidden" value="DELETE">   
            {{ csrf_field() }}
            <input type="submit" class="btn btn-danger btn-xs" value="Eliminar"></input>
            </form>
        
            </td>
        </tr>
        @endforeach
        @endif
    </tbody>

</table>
</div>     

@show