<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Licencia extends Model
{
    use HasFactory;

    protected $fillable = ['fecha_fin', 'fecha_inicio', 'folio', 'motivo', 'num_emp', 'presentandose', 'ubicacion'];
}
