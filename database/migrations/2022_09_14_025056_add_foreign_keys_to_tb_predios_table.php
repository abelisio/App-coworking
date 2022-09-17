<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToTbPrediosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('predios', function (Blueprint $table) {
            $table->foreign(['idpredios'], 'FK_predios_clientes')->references(['idclientes'])->on('tb_clientes')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tb_predios', function (Blueprint $table) {
            $table->dropForeign('FK_predios_clientes');
        });
    }
}
