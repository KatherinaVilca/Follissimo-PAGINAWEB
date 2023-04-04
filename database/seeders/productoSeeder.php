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
        DB::table('producto')->insert([
            'id' => '1',
            'nombre' => 'Planta',
            'precio' => rand(0,60),
            'descripción' => 'Prueba',
            'color' => Str::random(3),
            'tipo_categoria' => Str::random(4),
            'tipo_tamaño' => Str::random(3)
        ]);
    }
}
