<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class pedidoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pedido')->insert([
        'id_pedido' => '1A',
        'email' => Str::random(6).'gmail.com',
        'monto' => Str::random(5),
        ]);
    }
}
