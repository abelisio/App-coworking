<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbPrediosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('predios', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('nome_predio')->nullable();
            $table->string('descricao')->nullable();
            $table->string('endereco', 100)->nullable();
            $table->string('complemento', 100)->nullable();
            $table->string('numero', 10)->nullable();
            $table->string('bairro', 100)->nullable();
            $table->string('cep', 8)->nullable();
            $table->string('url_google_maps')->nullable();
            $table->string('imgpredio_nome', 200)->nullable();
            $table->date('data_nasc')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_predios');
    }
}
