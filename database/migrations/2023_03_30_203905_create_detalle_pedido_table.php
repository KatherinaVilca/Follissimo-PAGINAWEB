<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('detalle_pedido', function (Blueprint $table) {
            $table->foreignId('id_pedido')->constrained('pedido');
            $table->foreignId('id_producto')->constrained('producto');
            $table->primary(['id_pedido','id_producto']);
            $table->integer('cantidad');
            $table->integer('monto_subtotal');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detalle_pedido');
    }
};
