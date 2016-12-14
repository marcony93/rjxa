<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/contactanos',function(){
    return view('contactanos');
});

Route::get('/conocenos',function(){
    return view('conocenos');
});

Route::get('/noticias',function(){
    return view('nosotros');
});

Route::get('/albumes',function(){
    return view('albumesgal');
});

Route::get('/galeria',function(){
    return view('galeria');
});

Route::get('/voluntariado',function(){
    return view('voluntariado');
});

Route::get('/prueba',function(){
    return "esto es un mensaje de prueba";
});

Route::get('/pruebaparametros/{x}', function($x){
    return "Hola ". $x;
});

Route::get('pruebacont','controladorPrueba@index');

Route::get('controladorConNombre/{name}','controladorPrueba@nombre');

// Controladores RestFull php artisan maje:controller NOMBRE
Route::resource('amigos','AmigosController');