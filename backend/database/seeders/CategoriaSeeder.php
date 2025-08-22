<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //insertar registros  a la tabla

        DB::table('categorias')->insert([
            [
            'nombre'=>'cable utp',
            'descripcion'=>'categoria 5',
            'created_at'=>now(),
            'updated_at'=>now(),     
            ],    
             [
            'nombre'=>'cable drop',
            'descripcion'=>'de un hilo 1 km',
            'created_at'=>now(),
            'updated_at'=>now(),     
            ]  
             ]);
    }
}
