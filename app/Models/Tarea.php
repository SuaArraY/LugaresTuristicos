<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarea extends Model
{
    use HasFactory;

    protected $table = 'tareas';
    protected $fillable = [
        'nombre',
        'telefono',
        'correo',
        'hotel',
        'fecha_limite',
    ];
    protected $dates = ['fecha_limite'];
}
