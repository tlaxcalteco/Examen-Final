<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class categoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $descripcion = ['Oscura','Ambar','Clara','Artesanal'];

        for ($i=0; $i < 15; $i++) { 
            DB::table('categoria')->insert([
                'descripcion' => $descripcion[rand(0,count($descripcion)-1)]
            ]);
        }
    }
}
