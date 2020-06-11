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
       
      
            $horas_completas =array();

            $horas_ocupadas = DB::table('citas')
            ->select('hora_atencion_id',DB::raw('count(hora_atencion_id) AS count_hora_id'))
            ->where('fecha', '=', $fecha)
            ->groupBy('hora_atencion_id')->get();
        
            foreach($horas_ocupadas as $hora)
            {
                
                    if($hora->count_hora_id ==2){
                 
              
                   array_push ( $horas_completas , $hora->hora_atencion_id);
                }
    
         
              // ->whereNotIn('id', $horas_completas)
            

            }

 //   return  $horarios=HoraDeAtencion::whereNotIn('id', $horas_completas)->get();
        
    }
}
