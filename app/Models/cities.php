<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class cities extends Model
{
    //no es necesario relacionar el nombre de tabla pues usamos migraciones y ya esta conectado este model con cada tabla al usar este dicho procedimiento

    protected $fillable = [
        'state_id',
        'names',
        'status'
    ];


}
