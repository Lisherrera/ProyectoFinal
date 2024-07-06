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
     */
    public function run(): void
    {
        DB::table('usuarios')->insert([
            ['email'=>'admin@kuchow.cl','password'=>Hash::make('9876'),'nombre'=>'Administrador 1','activo'=>true,'perfil_id'=>1],
            ['email'=>'admin2@kuchow.cl','password'=>Hash::make('5432'),'nombre'=>'Administrador 2','activo'=>true,'perfil_id'=>1],
            ['email'=>'ejecutivo@kuchow.cl','password'=>Hash::make('1234'),'nombre'=>'Ejecutivo 1','activo'=>true,'perfil_id'=>2],
            ['email'=>'ejecutivo2@kuchow.cl','password'=>Hash::make('5678'),'nombre'=>'Ejecutivo 2','activo'=>true,'perfil_id'=>2],
        ]);

    }
}
