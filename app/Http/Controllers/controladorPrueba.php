<?php namespace rjxa\Http\Controllers;
use rjxa\Noticia;

class controladorPrueba extends Controller {

    public function index(){
        $noticias = Noticia::all();
        return view('admin')->with(['noticias' => $noticias]); 
    }

    public function nombre($nom){
        return "hola controlador ".$nom;
    }
}