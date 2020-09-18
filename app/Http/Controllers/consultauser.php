<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;
use Illuminate\Support\Facades\DB;
class consultauser extends Controller
{
    public function consulta($idusuario)
    {
        $detalles = DB::table('usuarios')->where('id_usuarios', '=', $idusuario)->get();
        return view("consulta",compact('detalles'));
    }

}
