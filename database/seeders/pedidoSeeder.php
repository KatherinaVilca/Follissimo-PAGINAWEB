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
        DB::table('pedidos')->insert([
        'id' => '1',
        //'email' => Str::random(6).'@gmail.com',
        'monto_total' => Str::random(5),
        ]);
    }
}
