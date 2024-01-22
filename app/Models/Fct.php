<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fct extends Model
{
    use HasFactory;

    protected $table='fct';

    protected $fillable=['id_alumno','id_enpresa','fechaInicio','fechaFin'];
}
