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
        $id_producto =reg;
        $id_pedido = DB::table('pedidos')->get('id');

        DB::table('detallePedidoSeeder')->insert([
            
            'id_producto' => $id_producto,
            'id_pedido' => $id_pedido,
            'cantidad' => Int::random(2),
            'monto_subtotal'=>Int::random(3),
        ]);
    }
}
