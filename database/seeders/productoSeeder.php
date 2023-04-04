<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class productoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tipo_categoria =  DB::table('categorias')->get('id');
        $tipo_tamaño = DB::table('tamaños')->get('id');

        DB::table('productos')->insert([
            'id' => '1',
            'nombre' => 'Planta',
            'precio' => rand(0,60),
            'descripción' => 'Prueba',
            'color' => Str::random(3),
            'tipo_categoria' => $tipo_categoria,
            'tipo_tamaño' => $tipo_tamaño,
        ]);
    }
}
