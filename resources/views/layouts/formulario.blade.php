@if(session()->has('msj'))
    <div class="alert alert-success" role="alert">{{ session('msj') }}</div>
@endif
@if(session()->has('errormsj'))
<div class="alert alert-danger" role="alert">Error al guardar los datos</div>
@endif

@section('formulario')
<form class="form-horizontal" role="form" method="POST" action="{{ url('noticiaspanel') }}" files="true" >
    {{ csrf_field() }}
    <div class="form-group">
        <label for="titulo" class="col-sm-2 control-label">Título</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" name="titulo" placeholder="Título..">
            @if($errors->has('titulo'))
            <span style="color:red">{{ $errors->first('titulo') }}</span>
            @endif
            
        </div>
    </div>
    <div class="form-group">
        <label for="descripcion" class="col-sm-2 control-label">Descripcion</label>
        <div class="col-sm-10">
            <textarea type="text" class="form-control" name="descripcion" placeholder="Descripcion.."></textarea>
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
        <input type="submit" class="btn btn-primary" value="Crear"></input>
        </div>
     </div>
    
    </div>
    
</form>
@show
