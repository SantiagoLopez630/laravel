<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banco extends Model
{
    use HasFactory;

    protected $table = 'banco';
    protected $primaryKey = 'codigoBanco'; // Define la clave primaria
    public $timestamps = true; // Si quieres usar timestamps

    protected $fillable = [
        'nombreBanco',
        'telefonoBanco',
        'correoBanco',
    ];
}
