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
        Schema::create('enderecos', function (Blueprint $table) {
            $table->id();
            $table->string("cep");
            $table->string("rua");
            $table->string("bairro");
            $table->string("cidade");
            $table->integer("numero")->nullable();
            $table->text("complemento")->nullable();
            $table->text("referencia")->nullable();
            $table->foreignId("cliente_id")
                ->constrained("clientes")
                ->references("id")
                ->onDelete("CASCADE")
                ->onUpdate("CASCADE");
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
        Schema::dropIfExists('enderecos');
    }
};
