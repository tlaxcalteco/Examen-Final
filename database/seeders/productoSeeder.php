<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class productoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $descripcion = ['Victotia','Corona','Dos equis','Tecate','Bud Light','Budweiser','Skol','Yajing','Heineken','Modelo','Modelo especial','Indio','Carta blanca','Noche buena','Pacifico'];
        $cantidad = ['1.2L','355ml','325ml','1L'];

        for ($i=0; $i < 15; $i++) { 
            DB::table('productos')->insert([
                'descripcion' => $descripcion[rand(0,count($descripcion)-1)],
                'cantidad' => $cantidad[rand(1,count($cantidad)-1)]
            ]);
        }

    }
}
