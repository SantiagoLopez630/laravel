<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    use HasFactory;

    protected $table = 'empleado';
    protected $primaryKey = 'documentoEmpleado';
    protected $fillable = [
        'nombre1', 'nombre2', 'apellido1', 'apellido2', 
        'tipoDocumento', 'estadoCivil', 'genero', 
        'telefono', 'fechaNacimiento', 'fechaExpedicion', 
        'correo', 'nomenclatura', 'municipio', 'barrio', 
        'nitEmpresa'
    ];
}
