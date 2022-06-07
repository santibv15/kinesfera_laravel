<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToAutorDocumentoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('autor_documento', function (Blueprint $table) {
            $table->foreign(['AUTOR_ID'], 'autor_documento_ibfk_1')->references(['ID_AUTOR'])->on('autor');
            $table->foreign(['DOCUMENTO_ID'], 'autor_documento_ibfk_2')->references(['ID_DOCUMENTO'])->on('documento_publico');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('autor_documento', function (Blueprint $table) {
            $table->dropForeign('autor_documento_ibfk_1');
            $table->dropForeign('autor_documento_ibfk_2');
        });
    }
}
