<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Encuesta extends Model
{
    protected $table = 'encuestas';
    protected $primaryKey = 'id_encuestas';
    protected $fillable = ['id_encuestas','tempD','preg_3','preg_4','preg_5','preg_6','preg_7','preg_8','preg_9','qr','dia'];
    protected $dates = ['created_at', 'updated_at'];
}
