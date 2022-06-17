<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedidos', function (Blueprint $table) {
            $table->id();
            $table->foreignId("cliente_id")
                ->constrained("clientes")
                ->references("id")
                ->onDelete("CASCADE")
                ->onUpdate("CASCADE");
            $table->foreignId("pessoa_id")
                ->constrained("pessoas")
                ->references("id")
                ->onDelete("CASCADE")
                ->onUpdate("CASCADE");
            $table->date("data_entrega");
            $table->time("hora_entrega");
            $table->string("forma_pagamento");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pedidos');
    }
};
