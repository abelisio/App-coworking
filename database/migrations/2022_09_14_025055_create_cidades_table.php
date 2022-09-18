<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCidadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cidades', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('idestado')->index('cidades_idestado');
            $table->string('nome', 100);
            $table->decimal('latitude', 8, 4)->nullable();
            $table->decimal('longitude', 8, 4)->nullable();
            $table->integer('capital')->nullable();
            $table->unsignedInteger('codigo_uf')->nullable()->index('codigo_uf');
            $table->unsignedInteger('codigo')->nullable();
            $table->string('codigo_receita', 10)->nullable();
            $table->string('codigointerno', 10)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cidades');
    }
}
