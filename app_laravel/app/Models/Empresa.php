<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    use HasFactory;

    protected $table = 'empresa';
    protected $primaryKey = 'nitEmpresa'; // Define la clave primaria
    public $timestamps = true; // Si quieres usar timestamps

    protected $fillable = [
        'nombreEmpresa',
        'telefono',
        'correo',
        'nomenclatura',
        'municipio',
        'barrio',
        'tipoEntidad',
    ];
}
