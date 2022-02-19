<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class UsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('usuarios')->insert([
            'id_rol' => 1,
            'nombre' => 'Medaly',
            'apellido' => 'Guerrero',
            'correo' => 'medaly@gmail.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('usuarios')->insert([
            'id_rol' => 2,
            'nombre' => 'Marijose',
            'apellido' => 'Gaona',
            'correo' => 'marijose@gmail.com',
            'password' => Hash::make('password'),
        ]);
        
    }
}
