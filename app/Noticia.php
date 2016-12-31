<?php

namespace rjxa;

use Illuminate\Database\Eloquent\Model; 

class Noticia extends Model
{
    protected $fillable = [
        'titulo', 'descripcion', 'urlImg'
    ];
    
}
