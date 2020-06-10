<?php

use Illuminate\Database\Seeder;
use App\Agenda\Cita;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        /*
        $this->call(HorarioDeAtencionTableSeeder::class);
        $this->call(TipoTramiteTableSeeder::class);
        */
        $array =array();

        $horas_ocupadas = DB::table('citas')
        ->select('hora_atencion_id',DB::raw('count(hora_atencion_id) AS count_hora_id'))
        ->groupBy('hora_atencion_id')->get();
    
        foreach($horas_ocupadas as $hora)
        {
            
                if($hora->count_hora_id <2){
                echo($hora->count_hora_id) ;
          
                array_push ( $array , $hora->hora_atencion_id);
            }

            
        }

        dd($array);
       
    }
}
