<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelicula extends Model
{
    use HasFactory;

    protected $fillable = ['Nombre', 
        'Calificacion', 
        'Fecha_lanzamiento', 
        'Secuela'];
}
