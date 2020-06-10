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
       
        /*
        $horas_ocupadas = Cita::select('hora_atencion_id')
            ->where('fecha', '=', $fecha)
            ->get(); */
            $horas_completas =array();

            $horas_ocupadas = DB::table('citas')
            ->select('hora_atencion_id',DB::raw('count(hora_atencion_id) AS count_hora_id'))
            ->where('fecha', '=', $fecha)
            ->groupBy('hora_atencion_id')->get();
        
            foreach($horas_ocupadas as $hora)
            {
                
                    if($hora->count_hora_id <2){
                 
              
                    dd(array_push ( $horas_completas , $hora->hora_atencion_id));
                }
    
           return $horarios = DB::table('horas_de_atencion')
               ->whereNotIn('id', $horas_ocupadas)
            ->get();

            }
        
    }
}
