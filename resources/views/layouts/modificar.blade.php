@if(session()->has('msj'))
    <div class="alert alert-success" role="alert">{{ session('msj') }}</div>
@endif
@if(session()->has('errormsj'))
<div class="alert alert-danger" role="alert">Error al guardar los datos</div>
@endif

@section('modificar')
@if(isset($noticia))
<form class="form-horizontal" method="POST" action="{{ route('noticiaspanel.update', $noticia->id) }}">
    
    <input name="_method" type="hidden" value="PUT">
    
    {{ csrf_field() }}
    <div class="form-group">
        <label for="titulo" class="col-sm-2 control-label">Título</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" name="titulo" value="{{ $noticia ->titulo }}">
            @if($errors->has('titulo'))
            <span style="color:red">{{ $errors->first('titulo') }}</span>
            @endif
            
        </div>
    </div>
    <div class="form-group">
        <label for="descripcion" class="col-sm-2 control-label">Descripcion</label>
        <div class="col-sm-10">
            <textarea type="text" class="form-control" name="descripcion" value="{{ $noticia -> descripcion }}"></textarea>
            @if($errors->has('descripcion'))
            <span style="color:red">{{ $errors->first('descripcion') }}</span>
            @endif
        </div>
    </div>
     <div class="form-group">
        <label for="urlImg" class="col-sm-2 control-label">Imagen</label>
        <div class="col-sm-10">
        <input type="file" class="form-control" name="urlImg">
        </div>
    </div>
     <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-primary">Modificar</button>
        </div>
     </div>
    
    </div>
  
</form>
@endif
@show 
