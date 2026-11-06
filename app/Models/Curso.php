<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    protected $table = 'cursos';

    protected $fillable = [
        'codigo_unico',
        'nombre',
        'descripcion',
        'creditos',
        'horas',
        'estado',
    ];
}
