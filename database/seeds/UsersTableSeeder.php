<?php

use Illuminate\Database\Seeder;

use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     
        User::create([
            'name' => 'Administrador',
            'username' => 'admin',
            'password' => Hash::make('YEAMERDSPARS'),
       
           
        ]);

        User::create([
            'name' => 'Prestador Servicio',
            'username' => 'capturista',
            'password' => Hash::make('IONOUSTIOTER'),
            
           
        ]);

        User::create([
            'name' => 'Guardia',
            'username' => 'guardia',
            'password' => Hash::make('POWNYTORTIFT'),
           
        ]);


    }
}
