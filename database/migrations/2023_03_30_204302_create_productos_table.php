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
        Schema::create('productos', function (Blueprint $table) {
            $table->id('id');
            $table->integer('precio');
            $table->string('nombre');
            $table->string('color');
            $table->string('descripción');
            $table->string('tipo_categoria');
            $table->foreign('tipo_categoria')
                ->references('tipo')->on('categorias');
            $table->string('tipo_tamaño');
            $table->foreign('tipo_tamaño')
                ->references('tipo')->on('tamaños');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos');
    }
};
