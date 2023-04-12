<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Database\Seeders\faker;

class productoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $plantas_interior = array("Ficus elastica","Potos","Sansevieria","Filodendro","Cuna de Moisés");
        $plantas_exterior = array("Geranios","Hortensias","Lavandas","Petunias","Rosales");
        $flores_exoticas = array("Orquídea","Amapola de California","Jazmín nocturno","Iris japonés","Plumeria");
        $flores_habituales = array("Rosa","Lirio","Margarita","Clavel","Girasol");
        $colores = array("rojo", "azul", "verde", "amarillo", "negro");
        $insumos_floreria = array("Cajas de cartón para arreglos","Papel celofán","Cintas decorativas","Espuma floral","Tijeras de poda");

        $tipos_tamaño = DB::table('tamaños')->pluck('tipo');

        DB::table('productos')->insert([
            'nombre' => $plantas_exterior[array_rand($plantas_exterior)],
            'precio' => rand(0,60),
            'descripción' => 'Descripción '.Str::random(40),
            'color' => $colores[array_rand($colores)],
            'tipo_categoria' => 'PLANTA EXTERIOR',
            'tipo_tamaño' => $tipos_tamaño->random(),
        ]);

        DB::table('productos')->insert([
            'nombre' => $plantas_interior[array_rand($plantas_interior)],
            'precio' => rand(0,60),
            'descripción' => 'Descripción '.Str::random(40),
            'color' => $colores[array_rand($colores)],
            'tipo_categoria' => 'PLANTA INTERIOR',
            'tipo_tamaño' => $tipos_tamaño->random(),
        ]);

        DB::table('productos')->insert([
            'nombre' => $flores_exoticas[array_rand($flores_exoticas)],
            'precio' => rand(0,60),
            'descripción' => 'Descripción '.Str::random(40),
            'color' => $colores[array_rand($colores)],
            'tipo_categoria' => 'FLOR EXOTICA',
            'tipo_tamaño' => $tipos_tamaño->random(),
        ]);

        DB::table('productos')->insert([
            'nombre' => $flores_habituales[array_rand($flores_habituales)],
            'precio' => rand(0,60),
            'descripción' => 'Descripción '.Str::random(40),
            'color' => $colores[array_rand($colores)],
            'tipo_categoria' => 'FLOR HABITUAL',
            'tipo_tamaño' => $tipos_tamaño->random(),
        ]);

        DB::table('productos')->insert([
            'nombre' => $insumos_floreria[array_rand($insumos_floreria)],
            'precio' => rand(1,5),
            'descripción' => 'Descripción '.Str::random(40),
            'color' => $colores[array_rand($colores)],
            'tipo_categoria' => 'INSUMO',
            'tipo_tamaño' => $tipos_tamaño->random(),
        ]);
    }
}
