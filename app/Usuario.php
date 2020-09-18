<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table = 'usuarios';
    protected $primaryKey = 'id_usuarios';
    protected $fillable = ['id_usuarios','nombre','foto','sexo','edad','puesto','qr','pulsera'];
    protected $dates = ['created_at', 'updated_at'];
}
