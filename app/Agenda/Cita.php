<?php

namespace App\Agenda;
use App\Agenda\Persona;
use App\Admin\HoraDeAtencion;
use App\Admin\TipoTramite;

use Illuminate\Database\Eloquent\Model;

class Cita extends Model
{
    protected $table="citas";


    public function persona()
    {
        return $this->belongsTo(Persona::class,'persona_id');
    }

    public function hora_atencion()
    {
        return $this->belongsTo(HoraDeAtencion::class,'hora_atencion_id');
    }

    public function t_tramite()
    {
        return $this->belongsTo(TipoTramite::class,'t_tramite_id');
    }
}



