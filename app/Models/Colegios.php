<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Colegios extends Model
{
    protected $table = 'colegios';
    protected $fillable = ['nombre', 'nivel', 'ubicacion'];
    protected $time_estamp = 'false';
}
