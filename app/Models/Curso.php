<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;
    // tabla que no sigue la convencion predefinida, ahora Curso representa a la tabla users.
    protected $table='users';
}
