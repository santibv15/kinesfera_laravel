<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToDocumentoPublicoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('documento_publico', function (Blueprint $table) {
            $table->foreign(['CLASE_DOCUMENTO'], 'documento_publico_ibfk_1')->references(['ID_CLASE'])->on('clase');
            $table->foreign(['TEMA_DOCUMENTO'], 'documento_publico_ibfk_2')->references(['ID_TEMA'])->on('tema');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('documento_publico', function (Blueprint $table) {
            $table->dropForeign('documento_publico_ibfk_1');
            $table->dropForeign('documento_publico_ibfk_2');
        });
    }
}
