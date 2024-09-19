<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cargo extends Model
{
    use HasFactory;

    protected $table = 'cargo';
    protected $primaryKey = 'codigoCargo'; // Define la clave primaria
    public $timestamps = true; // Si quieres usar timestamps

    protected $fillable = [
        'nombreCargo',
        'descripcion',
        'nivelJerarquico',
        'salario',
    ];
}
