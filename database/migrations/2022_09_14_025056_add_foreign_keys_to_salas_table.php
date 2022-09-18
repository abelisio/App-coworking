<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToTbSalasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('salas', function (Blueprint $table) {
            $table->foreign(['id'], 'FK_salas_tipagem_salas')->references(['id'])->on('tipagem_salas')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['id'], 'FK_salas_tipagem_predio')->references(['id'])->on('predios')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tb_salas', function (Blueprint $table) {
            $table->dropForeign('FK_salas_tipagem_salas');
            $table->dropForeign('FK_salas_tipagem_predio');
        });
    }
}
