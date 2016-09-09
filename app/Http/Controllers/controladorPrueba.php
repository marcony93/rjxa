<?php namespace rjxa\Http\Controllers;

class controladorPrueba extends Controller {

    public function index(){
        return "Hola controlador";
    }

    public function nombre($nom){
        return "hola controlador ".$nom;
    }
}