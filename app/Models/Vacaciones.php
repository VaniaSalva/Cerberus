<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vacaciones extends Model
{
    use HasFactory;

    protected $fillable = ['fecha_final', 'fecha_inicio', 'folio', 'num_emp', 'periodo', 'ubicacion', 'usuario'];
}
