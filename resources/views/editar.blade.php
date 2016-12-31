@extends('layouts.sistemamenu')
    @section('content')
    @parent
        
            <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <br>
                        
                                @include('layouts.modificar')                       
                           
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
