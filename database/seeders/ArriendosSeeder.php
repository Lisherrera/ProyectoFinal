<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ArriendosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('arriendos')->insert([
            ['rut'=>'20704066-4','nombre'=>'Thomas','apellido'=>'Arriagada','email'=>'ejecutivo@kuchow.cl','tipo'=>'coupe', 'fechaI'=>'2023-02-15', 'fechaT'=>'2023-02-28'],
            ['rut'=>'21340268-6','nombre'=>'Felipe','apellido'=>'Uribe','email'=>'ejecutivo2@kuchow.cl','tipo'=>'sedan', 'fechaI'=>'2022-08-20', 'fechaT'=>'2022-08-26'],
            ['rut'=>'19012987-1','nombre'=>'Camila','apellido'=>'Fernandez','email'=>'ejecutivo@kuchow.cl','tipo'=>'SUV', 'fechaI'=>'2024-02-2', 'fechaT'=>'2024-02-15'],
        ]);
    }
}
