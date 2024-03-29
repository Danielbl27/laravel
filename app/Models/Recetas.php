<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recetas extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'nombre',
        'ingredientes',
        'dificultad',
        'foto',
        'descripcion'
    ];
}