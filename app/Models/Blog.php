<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $fillable = ['nombres', 
    'apellidos', 
    'ci', 
    'cargo_user', 
    'telefono', 
    'ext', 
    'unidad', 
    'fecha', 
    'desc_requerimiento', 
    'nom_resp', 
    'justificacion', 
    'fecha_vigencia', 
    'nom_jef', 
    'apell_jef', 
    'cargo_jef', ];
}