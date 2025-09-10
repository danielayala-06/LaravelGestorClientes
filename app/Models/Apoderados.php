<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Apoderados extends Model
{
    protected $table = 'apoderados';
    protected $fillable = ['nombre', 'apellido', 'correo', 'relacion', 'telefono'];
    protected $timestamps = false;
}
