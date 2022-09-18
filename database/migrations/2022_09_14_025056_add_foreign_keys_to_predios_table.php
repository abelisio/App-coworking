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
            $table->foreign(['id'], 'FK_predios_clientes')->references(['id'])->on('clientes')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('predios', function (Blueprint $table) {
            $table->dropForeign('FK_predios_clientes');
        });
    }
}
