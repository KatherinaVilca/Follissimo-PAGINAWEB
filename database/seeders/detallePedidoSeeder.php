<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class detallePedidoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $id_producto = DB::table('producto')->get('id');
        $id_pedido = DB::table('pedido')->get('id');

        DB::table('detallePedidoSeeder')->insert([
            
            'id_producto' => $id_producto,
            'id_pedido' => $id_pedido,
            'cantidad' => Int::random(2),
            'monto_subtotal'=>Int::random(3),
        ]);
    }
}
