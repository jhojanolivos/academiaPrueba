<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    public $timestamps = false;
    use HasFactory;
    protected $fillable=['nombre','apellido','email','telefono','programa','contacto','edad'];
}
