@if(@errors->has('titulo))
            <span style="color:red">
            {{errors->first('titulo) }}
            </span>
            @endif



