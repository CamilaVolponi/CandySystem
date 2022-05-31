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
        Schema::create('modos_de_preparo', function (Blueprint $table) {
            $table->id();
            $table->foreignId("produto_id")
                ->constrained("produtos")
                ->onDelete("CASCADE")
                ->onUpdate("CASCADE");
            $table->string("descricao_do_passo");
            $table->integer("ordem");
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
        Schema::dropIfExists('modos_de_preparo');
    }
};