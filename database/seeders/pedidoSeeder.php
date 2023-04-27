<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PedidoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ids_clientes = DB::table('clientes')->pluck('id');
        for ( $i = 0 ; $i < 7 ; $i++ ) {
            
            DB::table('pedidos')->insert([
                'id_cliente' => $ids_clientes->random(),
                'monto_total' => rand(49,100),
                ]);
        }
    }
}
