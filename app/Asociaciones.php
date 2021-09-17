<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asociaciones extends Model
{
    protected $table = 'asociaciones';
    protected $primaryKey = 'id';
    protected $fillable = [
        'Nombre'
    ];
}
