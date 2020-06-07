<?php

use Illuminate\Database\Seeder;

use App\Admin\TipoTramite;

class TipoTramiteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TipoTramite::create([
            'nombre' => 'Personal'
        ]);

        TipoTramite::create([
            'nombre' => 'Personal  Extrangero'
        ]);
    }
}
