<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->integer('idclientes', true);
            $table->string('razao_social');
            $table->string('nome_fantasia')->nullable();
            $table->string('cnpj', 14);
            $table->string('telefone', 15)->nullable();
            $table->string('celular', 15)->nullable();
            $table->string('email', 100)->nullable();
            $table->string('endereco', 100)->nullable();
            $table->string('complemento', 100)->nullable();
            $table->string('numero', 10)->nullable();
            $table->string('bairro', 100)->nullable();
            $table->string('cep', 8)->nullable();
            $table->date('data_nasc')->nullable();
            $table->dateTime('updated_at')->nullable();
            $table->dateTime('created_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_clientes');
    }
}
