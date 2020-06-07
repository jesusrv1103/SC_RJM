<?php

namespace App\Http\Controllers\Agenda;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use  App\Admin\TipoTramite;
use App\Admin\HoraDeAtencion;
use App\Agenda\Persona;
use App\Agenda\Cita;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use Barryvdh\DomPDF\Facade as PDF;

 

class CitaController extends Controller
{
    public  function  create(){
        $tipo_tramites=TipoTramite::get();
        return view('agenda.agendar_cita_web',compact('tipo_tramites'));
    }


    public  function store(Request $request)
    {
        DB::beginTransaction();
        
        $persona = new Persona;
        $persona->nombre=$request->nombre_persona;
        $persona->fecha_nacimiento=$request->fecha_nacimiento;
        $persona->save();
        $idPersona=$persona->id;

        $cita=new Cita;
        $cita->folio=$this->generarFolio();
        $cita->fecha=$request->fecha_cita;
        $cita->hora_atencion_id=$request->hora_cita;
        $cita->t_tramite_id=$request->tipo_tramite;
        $cita->persona_id=$idPersona;
        $cita->medio_agenda="web";
        $cita->estado="agendada";
        $cita->save();

        //return $request;
        /*
        $pdf= PDF::setOptions(['isHtml5ParserEnabled' => true, 'isRemoteEnabled' => true])
        ->loadView('agenda.ficha_cita', ['cita' => $cita] )
        ->setPaper('legal', 'portrait');*/

        $pdf = PDF::loadView('agenda.ficha_cita', compact('cita'));
        
       // return $pdf->download('disney.pdf');
       
        return $pdf->download('PREDENUNCIA'.$cita->folio); 


        DB::commit();

     
    }

    public function generarFolio(){
        $ultimoIdSeguimiento= Cita::latest('id')->first();
        $folio="";
        $today = Carbon::now()->format('Y');
        if(Cita::latest('id')->first() != null)
        {
          
            $ultimoIdSeguimiento= intval($ultimoIdSeguimiento->id)+1;
            
            
            $folio= "0".$ultimoIdSeguimiento."/".$today;
        }
        else {
            $folio= "01/".$today;
        }
        return $folio;
    }


  
}
