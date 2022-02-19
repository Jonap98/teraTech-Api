<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
// use App\Models\Roles;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert(['nombre' => 'Administrador']);
        DB::table('roles')->insert(['nombre' => 'Tecnico']);
        DB::table('roles')->insert(['nombre' => 'Usuario']);
    }
}
