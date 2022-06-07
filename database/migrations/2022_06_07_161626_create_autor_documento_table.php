<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAutorDocumentoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('autor_documento', function (Blueprint $table) {
            $table->integer('ID_AUTOR_DOCUMENTO', true);
            $table->integer('AUTOR_ID')->index('AUTOR_ID');
            $table->integer('DOCUMENTO_ID')->index('DOCUMENTO_ID');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('autor_documento');
    }
}
