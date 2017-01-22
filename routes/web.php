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

use rjxa\Mail\Correo as ContactEmail;
use Illuminate\Mail\Message;
use Illuminate\Support\Facades\Mail;


Route::get('/', function () {
    return view('index');
});


Route::get('/conocenos',function(){
    return view('conocenos');
});

Route::get('/informate',function(){
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

Route::get('/sistema',function(){
    return view('admin');
});

Route::get('/vertodos',function(){
    return view('todos');
});


Route::get('/editar',function(){
    return view('editar');
});

Route::get('/detalle',function(){
    return view('detalle');
});

Route::get('/noticias',function(){
    return view('noticias');
});

Route::get('/vertodos','Noticias@mostrar');

//Route::get('/detalle','Noticias@show'); 'coordcentroamerica@rjxaca.org'


Route::resource('/noticiaspanel','Noticias');

Route::get('contactanos', function(){
    Mail::to('ericaarguetab@gmail.com', 'Erica')
        ->send(new ContactEmail('Mensaje'));
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