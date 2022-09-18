<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbSalasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salas', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('nome_predio')->nullable();
            $table->string('imgpredio_nome', 200)->nullable();
            $table->string('descricao')->nullable();
            $table->string('tipagem_sala', 100)->nullable()->index('FK_salas_tipagem_salas_idx');
            $table->integer('id_salas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_salas');
    }
}
