<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Alumnos extends Model
{
    protected $table = 'alumnos';
    protected $fillable = ['id_apoderado', 'id_colegio', 'nombre', 'apellido', 'color', 'f_profesion', 'producto', 'genero'];
    protected $timestamps= false;
}
