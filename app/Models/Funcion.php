<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Funcion extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_pelicula',
        'Fecha',
        'id_promo'

    ];
}
