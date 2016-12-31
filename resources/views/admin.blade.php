   @extends('layouts.sistemamenu')
    @section('content')
    @parent
        
            <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <br>
                        @include('layouts.formulario')
                        <br>   
       
                </div>
            </div>
                
                <div class="col-sm-offset-8 col-sm-10">
                        <a href="vertodos"><button 
                        class="btn btn-default">Ver todos</button></a></div>
                </div>
           
        </div>
    </div>

    


</body>


</html>

@endsection