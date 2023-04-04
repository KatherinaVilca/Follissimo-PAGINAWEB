<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('clientes')->insert([
            'id' => '1234',
            'nombre' => Str::random(5),
            'apellido' => Str::random(5),
            'direccion' => Str::random(5),
            'e-mail' => Str::random(6).'@gmail.com',
            ]);
    }
}
