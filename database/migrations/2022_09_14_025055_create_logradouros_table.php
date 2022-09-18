<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLogradourosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('logradouros', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('ativo', ['S', 'N'])->default('S')->index('logradouros_index_ativo');
            $table->enum('ativo_painel', ['S', 'N'])->default('S')->index('logradouros_index_ativo_painel');
            $table->dateTime('data_cad');
            $table->string('nome', 100);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('logradouros');
    }
}
