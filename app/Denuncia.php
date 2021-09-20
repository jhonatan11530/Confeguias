<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Denuncia extends Model
{
    protected $table = 'denuncia';
    protected $primaryKey = 'id';
    protected $fillable = [
        'NombreDenunciante',
        'TipoDocumento',
        'NumeroDocumento',
        'NTarjetaProfesional',
        'Correo',
        'Telefono',
        'TituloQueja',
        'DescripcionQueja',
        'PoseePrueba',
        'DescripcionHechos',
        'AdjuntarPruebas'
    ];
}
