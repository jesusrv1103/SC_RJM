<?php

use Illuminate\Database\Seeder;
use  App\Admin\HoraDeAtencion;

class HorarioDeAtencionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        HoraDeAtencion::create([
            'hora' => '2:00'
        ]);


        HoraDeAtencion::create([
            'hora' => '2:15'
        ]);

        HoraDeAtencion::create([
            'hora' => '2:30'
        ]);

        HoraDeAtencion::create([
            'hora' => '2:45'
        ]);

        HoraDeAtencion::create([
            'hora' => '3:00'
        ]);

        HoraDeAtencion::create([
            'hora' => '3:15'
        ]);

        HoraDeAtencion::create([
            'hora' => '3:30'
        ]);


        HoraDeAtencion::create([
            'hora' => '3:45'
        ]);

    }
}
