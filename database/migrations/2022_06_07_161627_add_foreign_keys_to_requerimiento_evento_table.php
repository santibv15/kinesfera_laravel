<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToRequerimientoEventoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('requerimiento_evento', function (Blueprint $table) {
            $table->foreign(['REQUERIMENTO_ID'], 'requerimiento_evento_ibfk_1')->references(['ID_REQUERIMIENTO'])->on('requerimiento');
            $table->foreign(['EVENTO_ID'], 'requerimiento_evento_ibfk_2')->references(['ID_EVENTO'])->on('evento');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('requerimiento_evento', function (Blueprint $table) {
            $table->dropForeign('requerimiento_evento_ibfk_1');
            $table->dropForeign('requerimiento_evento_ibfk_2');
        });
    }
}
