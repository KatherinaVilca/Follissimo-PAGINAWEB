<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Database\Seeders\faker;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $plantas_interior = array("Ficus elastica","Potos","Sansevieria","Filodendro","Cuna de Moisés", "Monstera",
                                "Monstera Adansonii", "Singoriun", "Lazo de amor", "Calatea", "Pothus");
        $plantas_exterior = array("Geranios","Hortensias","Lavandas","Petunias","Rosales", "Hiedra", "Helecho",
                                "Crisantemo");
        $flores_exoticas = array("Orquídea","Amapola de California","Jazmín nocturno","Iris japonés","Plumeria");
        $flores_habituales = array("Rosa","Lirio","Margarita","Clavel","Girasol","Gerbera");
        $colores = array("rojo", "azul", "verde", "amarillo", "negro","blanco");
        $insumos_floreria = array("Cajas de cartón para arreglos","Papel celofán","Cintas decorativas","Espuma floral","Tijeras de poda",
                                "Maseta ceramica", "Palo tutor", "Portamaceta", "Bolsa perlita", "Sustrato plantas interior", "Florero",
                                "Palo santo", "Hidro");

        $tipos_tamaño = DB::table('tamaños')->pluck('id');

        DB::table('productos')->insert([
            'nombre' => $plantas_exterior[array_rand($plantas_exterior)],
            'precio' => rand(0,2000),
            'descripción' => 'Descripción '.Str::random(40),
            'color' => $colores[array_rand($colores)],
            'tipo_categoria' => '2',
            'tipo_tamaño' => $tipos_tamaño->random(),
        ]);

        DB::table('productos')->insert([
            'nombre' => $plantas_exterior[array_rand($plantas_exterior)],
            'precio' => rand(0,2000),
            'descripción' => 'Descripción '.Str::random(40),
            'color' => $colores[array_rand($colores)],
            'tipo_categoria' => '2',
            'tipo_tamaño' => $tipos_tamaño->random(),
        ]);

        DB::table('productos')->insert([
            'nombre' => $plantas_exterior[array_rand($plantas_exterior)],
            'precio' => rand(0,2000),
            'descripción' => 'Descripción '.Str::random(40),
            'color' => $colores[array_rand($colores)],
            'tipo_categoria' => '2',
            'tipo_tamaño' => $tipos_tamaño->random(),
        ]);

        DB::table('productos')->insert([
            'nombre' => $plantas_exterior[array_rand($plantas_exterior)],
            'precio' => rand(0,2000),
            'descripción' => 'Descripción '.Str::random(40),
            'color' => $colores[array_rand($colores)],
            'tipo_categoria' => '2',
            'tipo_tamaño' => $tipos_tamaño->random(),
        ]);

        DB::table('productos')->insert([
            'nombre' => $plantas_exterior[array_rand($plantas_exterior)],
            'precio' => rand(0,2000),
            'descripción' => 'Descripción '.Str::random(40),
            'color' => $colores[array_rand($colores)],
            'tipo_categoria' => '2',
            'tipo_tamaño' => $tipos_tamaño->random(),
        ]);

        DB::table('productos')->insert([
            'nombre' => $plantas_exterior[array_rand($plantas_exterior)],
            'precio' => rand(0,2000),
            'descripción' => 'Descripción '.Str::random(40),
            'color' => $colores[array_rand($colores)],
            'tipo_categoria' => '2',
            'tipo_tamaño' => $tipos_tamaño->random(),
        ]);

        DB::table('productos')->insert([
            'nombre' => $plantas_exterior[array_rand($plantas_exterior)],
            'precio' => rand(0,2000),
            'descripción' => 'Descripción '.Str::random(40),
            'color' => $colores[array_rand($colores)],
            'tipo_categoria' => '2',
            'tipo_tamaño' => $tipos_tamaño->random(),
        ]);

        DB::table('productos')->insert([
            'nombre' => $plantas_exterior[array_rand($plantas_exterior)],
            'precio' => rand(0,2000),
            'descripción' => 'Descripción '.Str::random(40),
            'color' => $colores[array_rand($colores)],
            'tipo_categoria' => '2',
            'tipo_tamaño' => $tipos_tamaño->random(),
        ]);

        DB::table('productos')->insert([
            'nombre' => $plantas_exterior[array_rand($plantas_exterior)],
            'precio' => rand(0,2000),
            'descripción' => 'Descripción '.Str::random(40),
            'color' => $colores[array_rand($colores)],
            'tipo_categoria' => '2',
            'tipo_tamaño' => $tipos_tamaño->random(),
        ]);

        DB::table('productos')->insert([
            'nombre' => $plantas_exterior[array_rand($plantas_exterior)],
            'precio' => rand(0,2000),
            'descripción' => 'Descripción '.Str::random(40),
            'color' => $colores[array_rand($colores)],
            'tipo_categoria' => '2',
            'tipo_tamaño' => $tipos_tamaño->random(),
        ]);

        DB::table('productos')->insert([
            'nombre' => $plantas_exterior[array_rand($plantas_exterior)],
            'precio' => rand(0,2000),
            'descripción' => 'Descripción '.Str::random(40),
            'color' => $colores[array_rand($colores)],
            'tipo_categoria' => '2',
            'tipo_tamaño' => $tipos_tamaño->random(),
        ]);

        DB::table('productos')->insert([
            'nombre' => $plantas_exterior[array_rand($plantas_exterior)],
            'precio' => rand(0,2000),
            'descripción' => 'Descripción '.Str::random(40),
            'color' => $colores[array_rand($colores)],
            'tipo_categoria' => '2',
            'tipo_tamaño' => $tipos_tamaño->random(),
        ]);

        DB::table('productos')->insert([
            'nombre' => $plantas_interior[array_rand($plantas_interior)],
            'precio' => rand(0,2000),
            'descripción' => 'Descripción '.Str::random(40),
            'color' => $colores[array_rand($colores)],
            'tipo_categoria' => '1',
            'tipo_tamaño' => $tipos_tamaño->random(),
        ]);

        DB::table('productos')->insert([
            'nombre' => $plantas_interior[array_rand($plantas_interior)],
            'precio' => rand(0,2000),
            'descripción' => 'Descripción '.Str::random(40),
            'color' => $colores[array_rand($colores)],
            'tipo_categoria' => '1',
            'tipo_tamaño' => $tipos_tamaño->random(),
        ]);

        DB::table('productos')->insert([
            'nombre' => $plantas_interior[array_rand($plantas_interior)],
            'precio' => rand(0,2000),
            'descripción' => 'Descripción '.Str::random(40),
            'color' => $colores[array_rand($colores)],
            'tipo_categoria' => '1',
            'tipo_tamaño' => $tipos_tamaño->random(),
        ]);

        DB::table('productos')->insert([
            'nombre' => $plantas_interior[array_rand($plantas_interior)],
            'precio' => rand(0,2000),
            'descripción' => 'Descripción '.Str::random(40),
            'color' => $colores[array_rand($colores)],
            'tipo_categoria' => '1',
            'tipo_tamaño' => $tipos_tamaño->random(),
        ]);

        DB::table('productos')->insert([
            'nombre' => $plantas_interior[array_rand($plantas_interior)],
            'precio' => rand(0,2000),
            'descripción' => 'Descripción '.Str::random(40),
            'color' => $colores[array_rand($colores)],
            'tipo_categoria' => '1',
            'tipo_tamaño' => $tipos_tamaño->random(),
        ]);

        DB::table('productos')->insert([
            'nombre' => $plantas_interior[array_rand($plantas_interior)],
            'precio' => rand(0,2000),
            'descripción' => 'Descripción '.Str::random(40),
            'color' => $colores[array_rand($colores)],
            'tipo_categoria' => '1',
            'tipo_tamaño' => $tipos_tamaño->random(),
        ]);

        DB::table('productos')->insert([
            'nombre' => $plantas_interior[array_rand($plantas_interior)],
            'precio' => rand(0,2000),
            'descripción' => 'Descripción '.Str::random(40),
            'color' => $colores[array_rand($colores)],
            'tipo_categoria' => '1',
            'tipo_tamaño' => $tipos_tamaño->random(),
        ]);

        DB::table('productos')->insert([
            'nombre' => $plantas_interior[array_rand($plantas_interior)],
            'precio' => rand(0,2000),
            'descripción' => 'Descripción '.Str::random(40),
            'color' => $colores[array_rand($colores)],
            'tipo_categoria' => '1',
            'tipo_tamaño' => $tipos_tamaño->random(),
        ]);

        DB::table('productos')->insert([
            'nombre' => $plantas_interior[array_rand($plantas_interior)],
            'precio' => rand(0,2000),
            'descripción' => 'Descripción '.Str::random(40),
            'color' => $colores[array_rand($colores)],
            'tipo_categoria' => '1',
            'tipo_tamaño' => $tipos_tamaño->random(),
        ]);

        DB::table('productos')->insert([
            'nombre' => $plantas_interior[array_rand($plantas_interior)],
            'precio' => rand(0,2000),
            'descripción' => 'Descripción '.Str::random(40),
            'color' => $colores[array_rand($colores)],
            'tipo_categoria' => '1',
            'tipo_tamaño' => $tipos_tamaño->random(),
        ]);

        DB::table('productos')->insert([
            'nombre' => $plantas_interior[array_rand($plantas_interior)],
            'precio' => rand(0,2000),
            'descripción' => 'Descripción '.Str::random(40),
            'color' => $colores[array_rand($colores)],
            'tipo_categoria' => '1',
            'tipo_tamaño' => $tipos_tamaño->random(),
        ]);

        DB::table('productos')->insert([
            'nombre' => $plantas_interior[array_rand($plantas_interior)],
            'precio' => rand(0,2000),
            'descripción' => 'Descripción '.Str::random(40),
            'color' => $colores[array_rand($colores)],
            'tipo_categoria' => '1',
            'tipo_tamaño' => $tipos_tamaño->random(),
        ]);

        DB::table('productos')->insert([
            'nombre' => $flores_exoticas[array_rand($flores_exoticas)],
            'precio' => rand(1000,4000),
            'descripción' => 'Descripción '.Str::random(40),
            'color' => $colores[array_rand($colores)],
            'tipo_categoria' => '4',
            'tipo_tamaño' => $tipos_tamaño->random(),
        ]);

        DB::table('productos')->insert([
            'nombre' => $flores_exoticas[array_rand($flores_exoticas)],
            'precio' => rand(1000,4000),
            'descripción' => 'Descripción '.Str::random(40),
            'color' => $colores[array_rand($colores)],
            'tipo_categoria' => '4',
            'tipo_tamaño' => $tipos_tamaño->random(),
        ]);


        DB::table('productos')->insert([
            'nombre' => $flores_exoticas[array_rand($flores_exoticas)],
            'precio' => rand(1000,4000),
            'descripción' => 'Descripción '.Str::random(40),
            'color' => $colores[array_rand($colores)],
            'tipo_categoria' => '4',
            'tipo_tamaño' => $tipos_tamaño->random(),
        ]);

        DB::table('productos')->insert([
            'nombre' => $flores_exoticas[array_rand($flores_exoticas)],
            'precio' => rand(1000,4000),
            'descripción' => 'Descripción '.Str::random(40),
            'color' => $colores[array_rand($colores)],
            'tipo_categoria' => '4',
            'tipo_tamaño' => $tipos_tamaño->random(),
        ]);


        DB::table('productos')->insert([
            'nombre' => $flores_exoticas[array_rand($flores_exoticas)],
            'precio' => rand(1000,4000),
            'descripción' => 'Descripción '.Str::random(40),
            'color' => $colores[array_rand($colores)],
            'tipo_categoria' => '4',
            'tipo_tamaño' => $tipos_tamaño->random(),
        ]);

        DB::table('productos')->insert([
            'nombre' => $flores_exoticas[array_rand($flores_exoticas)],
            'precio' => rand(1000,4000),
            'descripción' => 'Descripción '.Str::random(40),
            'color' => $colores[array_rand($colores)],
            'tipo_categoria' => '4',
            'tipo_tamaño' => $tipos_tamaño->random(),
        ]);


        DB::table('productos')->insert([
            'nombre' => $flores_exoticas[array_rand($flores_exoticas)],
            'precio' => rand(1000,4000),
            'descripción' => 'Descripción '.Str::random(40),
            'color' => $colores[array_rand($colores)],
            'tipo_categoria' => '4',
            'tipo_tamaño' => $tipos_tamaño->random(),
        ]);

        DB::table('productos')->insert([
            'nombre' => $flores_exoticas[array_rand($flores_exoticas)],
            'precio' => rand(1000,4000),
            'descripción' => 'Descripción '.Str::random(40),
            'color' => $colores[array_rand($colores)],
            'tipo_categoria' => '4',
            'tipo_tamaño' => $tipos_tamaño->random(),
        ]);


        DB::table('productos')->insert([
            'nombre' => $flores_exoticas[array_rand($flores_exoticas)],
            'precio' => rand(1000,4000),
            'descripción' => 'Descripción '.Str::random(40),
            'color' => $colores[array_rand($colores)],
            'tipo_categoria' => '4',
            'tipo_tamaño' => $tipos_tamaño->random(),
        ]);

        DB::table('productos')->insert([
            'nombre' => $flores_exoticas[array_rand($flores_exoticas)],
            'precio' => rand(1000,4000),
            'descripción' => 'Descripción '.Str::random(40),
            'color' => $colores[array_rand($colores)],
            'tipo_categoria' => '4',
            'tipo_tamaño' => $tipos_tamaño->random(),
        ]);


        DB::table('productos')->insert([
            'nombre' => $flores_exoticas[array_rand($flores_exoticas)],
            'precio' => rand(1000,4000),
            'descripción' => 'Descripción '.Str::random(40),
            'color' => $colores[array_rand($colores)],
            'tipo_categoria' => '4',
            'tipo_tamaño' => $tipos_tamaño->random(),
        ]);

        DB::table('productos')->insert([
            'nombre' => $flores_exoticas[array_rand($flores_exoticas)],
            'precio' => rand(1000,4000),
            'descripción' => 'Descripción '.Str::random(40),
            'color' => $colores[array_rand($colores)],
            'tipo_categoria' => '4',
            'tipo_tamaño' => $tipos_tamaño->random(),
        ]);

        DB::table('productos')->insert([
            'nombre' => $flores_habituales[array_rand($flores_habituales)],
            'precio' => rand(0,60),
            'descripción' => 'Descripción '.Str::random(40),
            'color' => $colores[array_rand($colores)],
            'tipo_categoria' => '3',
            'tipo_tamaño' => $tipos_tamaño->random(),
        ]);

        DB::table('productos')->insert([
            'nombre' => $flores_habituales[array_rand($flores_habituales)],
            'precio' => rand(0,60),
            'descripción' => 'Descripción '.Str::random(40),
            'color' => $colores[array_rand($colores)],
            'tipo_categoria' => '3',
            'tipo_tamaño' => $tipos_tamaño->random(),
        ]);

        DB::table('productos')->insert([
            'nombre' => $flores_habituales[array_rand($flores_habituales)],
            'precio' => rand(0,60),
            'descripción' => 'Descripción '.Str::random(40),
            'color' => $colores[array_rand($colores)],
            'tipo_categoria' => '3',
            'tipo_tamaño' => $tipos_tamaño->random(),
        ]);

        DB::table('productos')->insert([
            'nombre' => $flores_habituales[array_rand($flores_habituales)],
            'precio' => rand(0,60),
            'descripción' => 'Descripción '.Str::random(40),
            'color' => $colores[array_rand($colores)],
            'tipo_categoria' => '3',
            'tipo_tamaño' => $tipos_tamaño->random(),
        ]);

        DB::table('productos')->insert([
            'nombre' => $flores_habituales[array_rand($flores_habituales)],
            'precio' => rand(0,60),
            'descripción' => 'Descripción '.Str::random(40),
            'color' => $colores[array_rand($colores)],
            'tipo_categoria' => '3',
            'tipo_tamaño' => $tipos_tamaño->random(),
        ]);

        DB::table('productos')->insert([
            'nombre' => $flores_habituales[array_rand($flores_habituales)],
            'precio' => rand(0,60),
            'descripción' => 'Descripción '.Str::random(40),
            'color' => $colores[array_rand($colores)],
            'tipo_categoria' => '3',
            'tipo_tamaño' => $tipos_tamaño->random(),
        ]);

        DB::table('productos')->insert([
            'nombre' => $flores_habituales[array_rand($flores_habituales)],
            'precio' => rand(0,60),
            'descripción' => 'Descripción '.Str::random(40),
            'color' => $colores[array_rand($colores)],
            'tipo_categoria' => '3',
            'tipo_tamaño' => $tipos_tamaño->random(),
        ]);

        DB::table('productos')->insert([
            'nombre' => $flores_habituales[array_rand($flores_habituales)],
            'precio' => rand(0,60),
            'descripción' => 'Descripción '.Str::random(40),
            'color' => $colores[array_rand($colores)],
            'tipo_categoria' => '3',
            'tipo_tamaño' => $tipos_tamaño->random(),
        ]);

        DB::table('productos')->insert([
            'nombre' => $flores_habituales[array_rand($flores_habituales)],
            'precio' => rand(0,60),
            'descripción' => 'Descripción '.Str::random(40),
            'color' => $colores[array_rand($colores)],
            'tipo_categoria' => '3',
            'tipo_tamaño' => $tipos_tamaño->random(),
        ]);

        DB::table('productos')->insert([
            'nombre' => $flores_habituales[array_rand($flores_habituales)],
            'precio' => rand(0,60),
            'descripción' => 'Descripción '.Str::random(40),
            'color' => $colores[array_rand($colores)],
            'tipo_categoria' => '3',
            'tipo_tamaño' => $tipos_tamaño->random(),
        ]);

        DB::table('productos')->insert([
            'nombre' => $flores_habituales[array_rand($flores_habituales)],
            'precio' => rand(0,60),
            'descripción' => 'Descripción '.Str::random(40),
            'color' => $colores[array_rand($colores)],
            'tipo_categoria' => '3',
            'tipo_tamaño' => $tipos_tamaño->random(),
        ]);

        DB::table('productos')->insert([
            'nombre' => $flores_habituales[array_rand($flores_habituales)],
            'precio' => rand(0,60),
            'descripción' => 'Descripción '.Str::random(40),
            'color' => $colores[array_rand($colores)],
            'tipo_categoria' => '3',
            'tipo_tamaño' => $tipos_tamaño->random(),
        ]);

        DB::table('productos')->insert([
            'nombre' => $insumos_floreria[array_rand($insumos_floreria)],
            'precio' => rand(100,500),
            'descripción' => 'Descripción '.Str::random(40),
            'color' => $colores[array_rand($colores)],
            'tipo_categoria' => '5',
            'tipo_tamaño' => $tipos_tamaño->random(),
        ]);

        DB::table('productos')->insert([
            'nombre' => $insumos_floreria[array_rand($insumos_floreria)],
            'precio' => rand(100,500),
            'descripción' => 'Descripción '.Str::random(40),
            'color' => $colores[array_rand($colores)],
            'tipo_categoria' => '5',
            'tipo_tamaño' => $tipos_tamaño->random(),
        ]);

        DB::table('productos')->insert([
            'nombre' => $insumos_floreria[array_rand($insumos_floreria)],
            'precio' => rand(100,500),
            'descripción' => 'Descripción '.Str::random(40),
            'color' => $colores[array_rand($colores)],
            'tipo_categoria' => '5',
            'tipo_tamaño' => $tipos_tamaño->random(),
        ]);

        DB::table('productos')->insert([
            'nombre' => $insumos_floreria[array_rand($insumos_floreria)],
            'precio' => rand(100,500),
            'descripción' => 'Descripción '.Str::random(40),
            'color' => $colores[array_rand($colores)],
            'tipo_categoria' => '5',
            'tipo_tamaño' => $tipos_tamaño->random(),
        ]);

        DB::table('productos')->insert([
            'nombre' => $insumos_floreria[array_rand($insumos_floreria)],
            'precio' => rand(100,500),
            'descripción' => 'Descripción '.Str::random(40),
            'color' => $colores[array_rand($colores)],
            'tipo_categoria' => '5',
            'tipo_tamaño' => $tipos_tamaño->random(),
        ]);

        DB::table('productos')->insert([
            'nombre' => $insumos_floreria[array_rand($insumos_floreria)],
            'precio' => rand(100,500),
            'descripción' => 'Descripción '.Str::random(40),
            'color' => $colores[array_rand($colores)],
            'tipo_categoria' => '5',
            'tipo_tamaño' => $tipos_tamaño->random(),
        ]);

        DB::table('productos')->insert([
            'nombre' => $insumos_floreria[array_rand($insumos_floreria)],
            'precio' => rand(100,500),
            'descripción' => 'Descripción '.Str::random(40),
            'color' => $colores[array_rand($colores)],
            'tipo_categoria' => '5',
            'tipo_tamaño' => $tipos_tamaño->random(),
        ]);

        DB::table('productos')->insert([
            'nombre' => $insumos_floreria[array_rand($insumos_floreria)],
            'precio' => rand(100,500),
            'descripción' => 'Descripción '.Str::random(40),
            'color' => $colores[array_rand($colores)],
            'tipo_categoria' => '5',
            'tipo_tamaño' => $tipos_tamaño->random(),
        ]);
        DB::table('productos')->insert([
            'nombre' => $insumos_floreria[array_rand($insumos_floreria)],
            'precio' => rand(100,500),
            'descripción' => 'Descripción '.Str::random(40),
            'color' => $colores[array_rand($colores)],
            'tipo_categoria' => '5',
            'tipo_tamaño' => $tipos_tamaño->random(),
        ]);

        DB::table('productos')->insert([
            'nombre' => $insumos_floreria[array_rand($insumos_floreria)],
            'precio' => rand(100,500),
            'descripción' => 'Descripción '.Str::random(40),
            'color' => $colores[array_rand($colores)],
            'tipo_categoria' => '5',
            'tipo_tamaño' => $tipos_tamaño->random(),
        ]);

        DB::table('productos')->insert([
            'nombre' => $insumos_floreria[array_rand($insumos_floreria)],
            'precio' => rand(100,500),
            'descripción' => 'Descripción '.Str::random(40),
            'color' => $colores[array_rand($colores)],
            'tipo_categoria' => '5',
            'tipo_tamaño' => $tipos_tamaño->random(),
        ]);

        DB::table('productos')->insert([
            'nombre' => $insumos_floreria[array_rand($insumos_floreria)],
            'precio' => rand(100,500),
            'descripción' => 'Descripción '.Str::random(40),
            'color' => $colores[array_rand($colores)],
            'tipo_categoria' => '5',
            'tipo_tamaño' => $tipos_tamaño->random(),
        ]);
    }
}
