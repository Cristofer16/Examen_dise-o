<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users') -> insert([
            'nombres' => 'Cristofer',
            'apellido_paterno' => 'Gómez',
            'apellido_materno' => 'Mamani',
            'usuario' => 'pewe',
            'contraseña' => bcrypt('Cgm_8507351'),
            'tipo' => 'admin',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
    }
}
