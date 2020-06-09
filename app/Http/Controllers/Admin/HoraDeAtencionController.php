<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Admin\HoraDeAtencion;
use App\Agenda\Cita;
use Illuminate\Support\Facades\DB;



class HoraDeAtencionController extends Controller
{
    public function horasAtencionDisponibles($fecha)
    {
       

        $horas_ocupadas = Cita::select('hora_atencion_id')
            ->where('fecha', '=', $fecha)
            ->get();
            
           return $horarios = DB::table('horas_de_atencion')
            ->whereNotIn('id', $horas_ocupadas)
            ->get();

        
        
    }
}
