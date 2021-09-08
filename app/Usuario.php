<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    public $timestamps = false;
    protected $table = 'usuario';
    protected $primaryKey = 'id';
    protected $fillable = [
        'identificacion',
        'correo',
        'password',
        'create_at'
    ];
}
